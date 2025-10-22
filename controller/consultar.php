<?php

session_start();
unset($_SESSION['resultados_busca']);
unset($_SESSION['termo_busca_utilizado']);
$_SESSION['erro_busca'] = null;

include_once '../database/database.php'; // Usa-se $conn

// Verifica se a requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Captura todos os dados, garantindo que mesmo vazios existam
    $protocolo = trim($_POST['protocolo'] ?? '');
    $empresa = trim($_POST['empresa'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $celular = trim($_POST['celular'] ?? '');

    // 1. Constrói a cláusula WHERE dinamicamente
    $where = [];
    $tipos = '';
    $valores = [];
    
    
    if (!empty($protocolo)) {
        $where[] = "protocolo = ?";
        $tipos .= 's';
        $valores[] = $protocolo;
    }
    
    if (!empty($empresa)) {
        // Se quiser uma busca parcial, use LIKE: $where[] = "empresa LIKE ?";
        $where[] = "empresa = ?"; 
        $tipos .= 's';
        $valores[] = $empresa;
    }
    
    if (!empty($email)) {
        $where[] = "email = ?";
        $tipos .= 's';
        $valores[] = $email;
    }

    if(!empty($celular)){
        $where[] = "celular = ?";
        $tipos .= 's';
        $valores[] = $celular;
    }

    
    // Verifica se algum campo foi preenchido
    if (count($where) > 0) {
        // Junta as condições com 'AND'
        $sql = "SELECT * FROM reporte WHERE " . implode(' AND ', $where);
        
        if ($stmt = $conn->prepare($sql)) {
            
            // Liga os parâmetros (usa call_user_func_array pois os parâmetros são variáveis)
            $bind_params = array_merge([$tipos], $valores);
            $stmt->bind_param(...$bind_params);

            $stmt->execute();
            $resultados_query = $stmt->get_result();
            
            $_SESSION['resultados_busca'] = $resultados_query->fetch_all(MYSQLI_ASSOC);
            // Armazena todos os termos para mostrar no reports_dev.php (opcional)
            $_SESSION['termo_busca_utilizado'] = "Protocolo: $protocolo, Empresa: $empresa, E-mail: $email"; 

            $stmt->close();
            
        } else {
            $_SESSION['erro_busca'] = "Erro na preparação da consulta: " . $conn->error;
        }
        
    } else {
        $_SESSION['erro_busca'] = "Preencha pelo menos um campo para realizar a busca.";
    }
    
} else {
    $_SESSION['erro_busca'] = "Acesso inválido ou formulário não enviado (método incorreto).";
}

$conn->close();

header('Location: ../views/reports_dev.php');
exit;
?>