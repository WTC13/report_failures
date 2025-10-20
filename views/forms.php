<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

        <title>Cadastro de reporte</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center p-2 mt-3">
                <div class="card shadow p-5 mt-3">
                    <h2 class="fs-6 text-primary">Cadastre seu reporte 📊</h2>
                    <form action="../controller/cadastrar.php" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">                            
                                <div class="form-group">
                                    <label for="" class="form-label">N° de protocolo:</label>
                                    <input type="text" class="form-control" name="protocolo" placeholder="Insira o protocolo" required>
                                    <!-- <small>Digite o número de protocolo do reporte de falhas</small> -->
                                </div>       
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">CNPJ:</label>
                                    <input type="text" class="form-control" name="cnpj" placeholder="Insira o CNPJ" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">E-mail:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Insira o e-mail" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Senha:</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Insira a senha" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Empresa:</label>
                                    <input type="text" class="form-control" name="empresa" placeholder="Insira o nome da empresa" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">N° de Celular:</label>
                                    <input type="tel" class="form-control" name="celular" placeholder="Insira o número de celular" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Responsável:</label>
                                    <select name="responsavel" id="responsavel" class="form-select">
                                        <option value="">Selecione o responsável</option>
                                        <option value="Douglas">Douglas Soares</option>
                                        <option value="Emylle Garcia">Emylle Garcia</option>
                                        <option value="Vagner Júnior">Vagner Júnior</option>
                                        <option value="Wendell Timóteo">Wendell Timóteo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Data de reporte:</label>
                                    <input type="datetime-local" class="form-control" name="" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Módulo:</label>
                                    <select name="modulo" id="modulo" class="form-select">
                                        <option value="nulo">Selecione o módulo</option>
                                        <option value="financeiro">Financeiro</option>
                                        <option value="orçamentos">Orçamentos</option>
                                        <option value="serviços">Serviços</option>
                                        <option value="plano de corte">Plano de Corte</option>
                                        <option value="projeto de vidro">Projeto de Vidro</option>
                                        <option value="agenda">Agenda</option>
                                        <option value="produtos">Produtos</option>
                                        <option value="preço dos itens">Preço dos Itens</option>
                                        <option value="relatorios">Relatorios</option>
                                        <option value="administradores">Administradores</option>
                                        <option value="funcionarios">Funcionários</option>
                                        <option value="estoque">Estoque</option>
                                        <option value="outros">Outros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Link do vídeo:</label>
                                    <input type="url" class="form-control" name="link_erro" placeholder="Insira o link do vídeo">
                                </div>
                            </div>
                            <div class="col-xl-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Outro módulo:</label>
                                    <input type="text" class="form-control" name="outro_modulo" placeholder="Insira o módulo com erro">
                                </div>
                            </div>
                            <div class="col-xl-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Descrição:</label>
                                    <textarea name="descricao" id="descricao" class="form-control" rows="4" placeholder="Descreva o erro" required></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 mt-2">                               
                                <button type="submit" class="btn btn-primary text-light w-100 py-2 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Cadastrar</span>
                                </button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>