<?php
session_start();

// Variáveis para exibição
$resultados = isset($_SESSION['resultados_busca']) ? $_SESSION['resultados_busca'] : null;
$termo_busca = isset($_SESSION['protocolo']) ? $_SESSION['protocolo'] : '';
$erro = isset($_SESSION['erro_busca']) ? $_SESSION['erro_busca'] : null;

// 2. LIMPA A SESSÃO (para que os resultados não apareçam na próxima visita/F5)
unset($_SESSION['resultados_busca']);
unset($_SESSION['protocolo']);
unset($_SESSION['erro_busca']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
        <title>Reportes de Falhas</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center p-2 mt-3">
                <div class="card shadow bg-light p-5 mt-3">
                    <h2 class="fs-1 text-primary">Acompanhe seu reporte</h2>
                    <form action="../controller/consultar.php" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">N° de protocolo:</label>
                                    <input type="text" class="form-control" name="protocolo" placeholder="Insira o N° de protocolo">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Empresa:</label>
                                    <input type="text" class="form-control" name="empresa" placeholder="Insira o nome da empresa">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">E-mail:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Insira o e-mail">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Celular:</label>
                                    <input type="text" class="form-control" name="celular" placeholder="Insira o celular">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 mt-4">
                                <button type="submit" class="btn btn-primary text-light w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Consultar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center p-2 mt-3">
                <div class="card shadow bg-light p-5 mt-3">
                    <h2 class="fs-1 text-primary">Dados de reporte</h2>
                    <div class="row">
                        <div class="card bg-light col-xl-12 p-3 mt-4">
                            <h6 class="card-title">Histórico do reporte</h6>
                            
                        </div>
                        <div class="card bg-light col-xl-12 p-3 mt-4">
                            <h6 class="card-title">Relatório geral</h6>
                            <small class="card-text">de todos os chamados da empresa consultada</small>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ver relatório
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Relatório: empresa xs</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php

                                            if ($erro){
                                                echo "<p style='color: red;'><strong>Erro na Busca:</strong> " . htmlspecialchars($erro) . "</p>";                                
                                            }
                                            elseif($resultados !== null){
                                                if(count($resultados) > 0){
                                                    foreach ($resultados as $res){
                                                        echo "Protocolo: " . htmlspecialchars($res['protocolo']) . "</br>";
                                                        echo "Empresa: " . htmlspecialchars($res['empresa']) . "</br>";
                                                        echo "E-mail: " . htmlspecialchars($res['e-mail']) . "</br>";
                                                        echo "Senha: " . htmlspecialchars($res['senha']) . "</br>";
                                                        echo "Celular: " . htmlspecialchars($res['celular']) . "</br>";
                                                        echo "CNPJ/CPF: " . htmlspecialchars($res['CNPJ_CPF']) . "</br>";
                                                        echo "Responsável: " . htmlspecialchars($res['responsavel']) . "</br>";
                                                        echo "Data de reporte: " . htmlspecialchars($res['data_de_reporte']) . "</br>";
                                                        echo "Módulo: " . htmlspecialchars($res['modulo']) . "</br>";
                                                        // echo "Outro Módulo: " . htmlspecialchars($res['modulo_outros']) . "</br>";
                                                        echo "Descrição: " . htmlspecialchars($res['descricao']) . "</br>";
                                                        // echo "Link do vídeo: " . htmlspecialchars($res['htmlspecialchars']) . "</br>";
                                                        echo "Status: " . htmlspecialchars($res['status']) . "</br>";
                                                        echo "</br></br>";
                                                    }
                                                }
                                            }
                                            else {
                                                echo "<p>Use o formulário acima para realizar uma busca.</p>";
                                            }

                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <p>Exporte seu relatório:</p>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CSV</button>
                                        <button type="button" class="btn btn-primary">PDF</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-2">Exportar relatório</button>
                            <p>Colocar modal com opções: csv, text, pdf e depois baixar e perguntar se quer enviar via whatsapp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="../public/js/script.js"></script>
    </body>
</html>