<?php

function getConnection() {
    $host = 'maglev.proxy.rlwy.net:18081';
    $user = 'root';
    $password = 'sqjreNFybunQxUtSeKUMCcJXIKJDCEEa';
    $dbname = 'reportes';
    $port = 3306;

    // Conecta ao banco de dados usando a sintaxe orientada a objetos do MySQLi
    $mysqli = new mysqli($host, $user, $password, $dbname, $port);

    // Verifica se houve erro de conexão
    if($mysqli->connect_error) {
        // Envia um JSON de ERRO e para o script (não retorna texto simples)
        http_response_code(500); 
        echo json_encode(['status' => 'ERRO', 'mensagem' => 'Erro de conexão com o banco de dados: ' . $mysqli->connect_error]);
        exit;
    }
    
    // Define o charset
    $mysqli->set_charset("utf8mb4");
    
    // Retorna a conexão (sem NENHUM echo de sucesso)
    return $mysqli;
}
// NÃO ADICIONE NADA MAIS AQUI
?>