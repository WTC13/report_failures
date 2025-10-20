<?php
$host = "maglev.proxy.rlwy.net";
$port = 18081;
$user = "root";
$password = "sqjreNFybunQxUtSeKUMCcJXIKJDCEEa"; // coloque a senha do Railway

// Conecta sem escolher o banco
$conn = new mysqli($host, $user, $password, "", $port);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Cria o banco "reportes"
$sql = "CREATE DATABASE IF NOT EXISTS reportes";
if ($conn->query($sql) === TRUE) {
    echo "✅ Banco 'reportes' criado com sucesso!";
} else {
    echo "❌ Erro ao criar banco: " . $conn->error;
}

$conn->close();
?>
