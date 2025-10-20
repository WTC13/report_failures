<?php

$host = 'maglev.proxy.rlwy.net:18081';
$user = 'root';
$password = 'sqjreNFybunQxUtSeKUMCcJXIKJDCEEa';
$dbname = 'reportes';
$port = 3306;

$conn = new mysqli($host, $user, $password, $dbname, $port);

if($conn->connect_error){
    die("Falha na conexão: " . $conn->connect_error);
}
else {
    echo "Connect bd Full Success! ✅";
}

$conn->set_charset("utf8mb4");

?>