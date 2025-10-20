<?php

include_once '../database/database.php';

$conn->set_charset("utf8mb4");

$protocolo = isset($_POST['protocolo']) ? $conn->real_escape_string($_POST['protocolo']) : '';
$cnpj_cpf = isset($_POST['cnpj']) ? $conn->real_escape_string($_POST['cnpj']) : ''; // 
$email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : ''; 
$senha = isset($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_DEFAULT) : ''; // **IMPORTANTE: Sempre armazene senhas como HASH!**
$empresa = isset($_POST['empresa']) ? $conn->real_escape_string($_POST['empresa']) : ''; 
$celular = isset($_POST['celular']) ? $conn->real_escape_string($_POST['celular']) : '';
$responsavel = isset($_POST['responsavel']) ? $conn->real_escape_string($_POST['responsavel']) : '';
$modulo = isset($_POST['modulo']) ? $conn->real_escape_string($_POST['modulo']) : '';
$modulo_outros = isset($_POST['modulo_outros']) ? $conn->real_escape_string($_POST['modulo_outros']) : NULL;
$descricao = isset($_POST['descricao']) ? $conn->real_escape_string($_POST['descricao']) : '';
$link_erro = isset($_POST['link_erro']) ? $conn->real_escape_string($_POST['link_erro']) : NULL;
$status = isset($_POST['status']) ? $conn->real_escape_string($_POST['status']) : 'Reporte solicitado';


$sql = "INSERT INTO reporte (protocolo, empresa, `e-mail`, senha, celular, CNPJ_CPF, responsavel, data_de_reporte, modulo, modulo_outros, descricao, link_do_video_de_erro, status)
VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?)";

// 6. Preparar a instrução
$stmt = $conn->prepare($sql);

if ($stmt === FALSE) {
    die('Erro na preparação da query: ' . $conn->error);
}

$stmt->bind_param("ssssssssssss", 
    $protocolo, 
    $empresa, 
    $email, 
    $senha, // Senha já está como hash
    $celular, 
    $cnpj_cpf, 
    $responsavel, 
    $modulo,
    $modulo_outros,
    $descricao,
    $link_do_video_de_erro, 
    $status
);

// 8. Executar a instrução
if ($stmt->execute()) {
    echo "<h2>Reporte cadastrado com sucesso!</h2>";
    echo "<p>Protocolo: {$protocolo}</p>";
    header("Location:../views/reports_dev.php");
} else {
    echo "<h2>Erro ao cadastrar o reporte:</h2>" . $stmt->error;
}

// 9. Fechar a instrução e a conexão
$stmt->close();
$conn->close();

?>