<?php

$host = 'maglev.proxy.rlwy.net:18081';
$user = 'root';
$password = 'sqjreNFybunQxUtSeKUMCcJXIKJDCEEa';
$dbname = 'reportes';
$port = 3306;

// 1. Criar a conexão
$conn = new mysqli($host, $user, $password, $dbname, $port);

// 2. Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// 3. Definir o charset (opcional, mas recomendado para UTF-8)
$conn->set_charset("utf8mb4");

// 4. Consulta SQL para criar a tabela 'reporte'
$sql = "
CREATE TABLE IF NOT EXISTS reporte (
    protocolo VARCHAR(100) PRIMARY KEY,
    empresa VARCHAR(100) NOT NULL,
    `e-mail` VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    celular VARCHAR(100) NOT NULL,
    CNPJ_CPF VARCHAR(100),
    responsavel ENUM('Douglas Soares', 'Emille Garcia', 'Wagner Júnior', 'Wendell Timóteo'),
    data_de_reporte DATETIME,
    modulo ENUM('Financeiro', 'Orçamentos', 'Serviços', 'Plano de Corte', 'Projeto de Vidro', 'Agenda', 'Produtos', 'Preço dos Itens', 'Relatórios', 'Administradores', 'Funcionários', 'Estoque'),
    modulo_outros VARCHAR(100),
    descricao VARCHAR(100),
    link_do_video_de_erro VARCHAR(100),
    status ENUM('Reporte solicitado', 'Reporte em análise', 'Homologação', 'Produção') NOT NULL
);
";

// 5. Executar a consulta
if ($conn->query($sql) === TRUE) {
    echo "Tabela 'reporte' criada ou já existente e verificada com sucesso!\n";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;
}

// 6. Fechar a conexão
$conn->close();

?>