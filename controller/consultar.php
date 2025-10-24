<?php
require_once '../database/database.php'; 

function sendJsonResponse($status, $mensagem, $dados = null, $httpCode = 200) {
    http_response_code($httpCode);
    $response = ['status' => $status, 'mensagem' => $mensagem];
    if ($dados !== null) {
        $response['dados'] = $dados;
    }
    echo json_encode($response);
    exit;
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJsonResponse('ERRO', 'Método não permitido.', null, 405);
}

$json_data = file_get_contents('php://input');
$dados_recebidos = json_decode($json_data, true);

if ($dados_recebidos === null) {
    sendJsonResponse('ERRO', 'Dados JSON inválidos.', null, 400);
}

$protocolo = $dados_recebidos['protocolo'] ?? '';
$empresa   = $dados_recebidos['empresa'] ?? '';
$email     = $dados_recebidos['email'] ?? '';
$celular   = $dados_recebidos['celular'] ?? '';

$clausulas = [];
$tipos = '';
$parametros = [];

if (!empty($protocolo)) {
    $clausulas[] = 'protocolo = ?'; 
    $tipos .= 's'; 
    $parametros[] = $protocolo;
}
if (!empty($empresa)) {
    $clausulas[] = 'empresa LIKE ?';
    $tipos .= 's';
    $parametros[] = "%$empresa%"; 
}
if (!empty($email)) {
    $clausulas[] = 'email = ?';
    $tipos .= 's';
    $parametros[] = $email;
}
if (!empty($celular)) {
    $clausulas[] = 'celular = ?';
    $tipos .= 's';
    $parametros[] = $celular;
}

if (empty($clausulas)) {
    sendJsonResponse('ERRO', 'Preencha pelo menos um campo de busca.', null, 400); 
}

$sql = "SELECT * FROM reporte";
$sql .= " WHERE " . implode(" OR ", $clausulas); 

try {
    $mysqli = getConnection();
    $stmt = $mysqli->prepare($sql);
    
    if (!$stmt) {
        sendJsonResponse('ERRO', 'Erro na preparação da consulta.', null, 500);
    }
    
    $args = [];
    $args[] = $tipos;

    foreach ($parametros as $key => $valor) {
        $args[] = &$parametros[$key]; 
    }

    if (!empty($parametros)) {
        $bind_result = $stmt->bind_param(...$args); 
    
        if ($bind_result === false) {
            // Erro no bind_param (pode ser problema na query ou nos tipos)
            sendJsonResponse('ERRO', 'Erro ao vincular parâmetros da consulta.', null, 500);
        }
    }
    
    $stmt->execute();    
    $result = $stmt->get_result();
    $resultados = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    $mysqli->close();

    if (count($resultados) > 0) {
        sendJsonResponse('SUCESSO', 'Busca realizada com sucesso.', $resultados);
    } else {
        sendJsonResponse('ERRO', 'Nenhum reporte encontrado com os critérios fornecidos.', []);
    }

} 
catch (Exception $e) {
    error_log("Erro na consulta: " . $e->getMessage());
    sendJsonResponse('ERRO', 'Erro interno do servidor ao consultar o banco de dados.', null, 500);
}
?>