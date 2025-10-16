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
            <div class="d-flex justify-content-center align-items-center p-3 mt-3">
                <div class="card shadow p-3 mt-3">
                    <h2 class="text-primary">Cadastre seu Formulário</h2>
                    <form action="cadastrar.php">
                        <div class="form-group mb-3">
                            <label for="#" class="p-1">N° de protocolo:</label>
                            <input type="text" class="form-control" name="protocolo" placeholder="Insira o protocolo">
                            <small>Digite o número de protocolo do reporte de falhas</small>
                        </div>
                        <div class="form-group">
                            <label for="">Empresa:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Senha:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">N° de Celular:</label>
                            <input type="phone-number" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">CNPJ:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Responsável:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Data de reporte:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Módulo:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Outro módulo:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Descrição:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Link do vídeo:</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="d-block w-100">
                            <button class="btn btn-primary text-light">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>