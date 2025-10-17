<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Cadastro de reporte</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center p-2 mt-3">
                <div class="card shadow p-5 mt-3">
                    <h2 class="text-primary">Cadastre seu reporte 📊</h2>
                    <form action="cadastrar.php" method="POST">
                        <div class="row">
                            <div class="col-xl-12 d-flex justify-content-between align-items-center mt-2">
                                <div class="form-group col-xl-6 me-3">
                                    <label for="" class="mb-1">N° de protocolo:</label>
                                    <input type="text" class="form-control" name="protocolo" placeholder="Insira o protocolo" required>
                                    <!-- <small>Digite o número de protocolo do reporte de falhas</small> -->
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="" class="mb-1">CNPJ:</label>
                                    <input type="text" class="form-control" name="cnpj" placeholder="Insira o CNPJ" required>
                                </div>
                            </div>
                            <div class="col-xl-12 d-flex mt-2">
                                <div class="form-group col-xl-6 me-3">
                                    <label for="" class="mb-1">E-mail:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Insira o e-mail" required>
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="" class="mb-1">Senha:</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Insira a senha" required>
                                </div>
                            </div>
                            <div class="col-xl-12 d-flex mt-2">
                                <div class="form-group col-xl-6 me-3">
                                    <label for="" class="mb-1">Empresa:</label>
                                    <input type="text" class="form-control" name="empresa" placeholder="Insira o nome da empresa" required>
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="" class="mb-1">N° de Celular:</label>
                                    <input type="tel" class="form-control" name="celular" placeholder="Insira o número de celular" required>
                                </div>
                            </div>
                            <div class="col-xl-12 d-flex mt-2">
                                <div class="form-group col-xl-6 me-3">
                                    <label for="" class="mb-1">Responsável:</label>
                                    <select name="responsavel" id="responsavel" class="form-select">
                                        <option value="">Selecione o responsável</option>
                                        <option value="douglas">Douglas Soares</option>
                                        <option value="emylle">Emylle Garcia</option>
                                        <option value="vagner">Vagner Eduardo</option>
                                        <option value="wendell">Wendell Timóteo</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="" class="mb-1">Data de reporte:</label>
                                    <input type="datetime-local" class="form-control" name="" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-xl-12 d-flex mt-2">
                                <div class="form-group col-xl-6 me-3">
                                    <label for="" class="mb-1">Módulo:</label>
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
                                        <option value="admin">Administradores/Funcionários</option>
                                        <option value="estoque">Estoque</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-6">
                                    <label for="" class="mb-1">Link do vídeo:</label>
                                    <input type="url" class="form-control" name="link_erro" placeholder="Insira o link do vídeo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-1" >Outro módulo:</label>
                                <input type="text" class="form-control" name="outro_modelo" placeholder="Insira o módulo com erro">
                            </div>
                            <div class="form-group d-flex flex-column mt-2">
                                <label for="" class="mb-1">Descrição:</label>
                                <textarea name="descricao" id="descricao" placeholder="Descreva o erro" class="border rounded" rows="5" cols="12" required></textarea>
                            </div>
                            <div class="form-group mt-2 col-xl-12">
                                <button class="btn btn-primary text-light col-xl-12">Cadastrar</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>