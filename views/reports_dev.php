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
                    <form id="forms_dev">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">N° de protocolo:</label>
                                    <input type="text" class="form-control" name="protocolo" id="protocolo" placeholder="Insira o N° de protocolo">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Empresa:</label>
                                    <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Insira o nome da empresa">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">E-mail:</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Insira o e-mail">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Celular:</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="Insira o celular">
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
                            <div id="status" class="mt-2"></div>
    
                            <h2>Resultados da Busca:</h2>
                            <pre id="json"></pre>
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
                                    <div class="modal-body" id="modal_template_reporte">
                                        <h6>Reporte</h6>
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

        <script id="template_reportes" type="text/x-handlebars-template">
            {{#if dados}}
                <h6 class="text-primary">Reportes de falhas da empresa</h6>
                <div class="col-xl-12">
                    {{#each dados}}
                        <div class="card shadow p-3 mt-2">
                            <span class="form-label">Protocolo: {{protocolo}}</span>
                            <span class="form-label">Empresa: {{empresa}}</span>
                            <span class="form-label">E-mail: {{e-mail}}</span>
                            <span class="form-label">Senha: {{senha}}</span>
                            <span class="form-label">Celular: {{celular}}</span>
                            <span class="form-label">CNPJ/CPF: {{CNPJ_CPF}}</span>
                            <span class="form-label">Responsável: {{responsavel}}</span>
                            <span class="form-label">Data de reporte: {{data_de_reporte}}</span>
                            <span class="form-label">Módulo: {{modulo}}</span>
                            <span class="form-label">Descrição: {{descricao}}</span>
                            <span class="form-label">Link do erro: {{link_do_video_do_erro}}</span>
                            <span class="form-label">Status: {{status}}</span>
                        </div>
                    {{/each}}
                </div>
            {{else}}
                <p>sem reportes</p>
            {{/if}}
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.8/handlebars.min.js" integrity="sha512-E1dSFxg+wsfJ4HKjutk/WaCzK7S2wv1POn1RRPGh8ZK+ag9l244Vqxji3r6wgz9YBf6+vhQEYJZpSjqWFPg9gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="../controller/consultar.js"></script>
        <script src="../public/js/script.js"></script>
    </body>
</html>