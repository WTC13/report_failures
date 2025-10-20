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
                                <label for="" class="form-label">Senha:</label>
                                <input type="text" class="form-control" name="senha" placeholder="Insira a senha">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center p-2 mt-3">
                <div class="card shadow bg-light p-3 mt-2">
                    <div class="row">
                        <h2 class="fs-1 text-primary">Dados de Reporte</h2>
                        <div class="col-12">
                            <h6>Histórico do reporte</h6>
                            <p>lista com for each de todos os dados do reporte.</p>
                        </div>
                        <div class="col-12">
                            <h6>Relatório</h6>
                            <button></button>
                            <button>Exportar Relatório</button>
                            <p>Colocar modal com opções: csv, text, pdf e depois baixar e perguntar se quer enviar via whatsapp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>