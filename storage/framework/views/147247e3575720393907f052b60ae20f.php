<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="/CSS/cadastro.css">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

    <main class="container mt-5">
        <h1 class="text-center mb-4">Cadastro de Contato</h1>
        
        <form action="<?php echo e(url('contatos/create')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="card p-4 shadow-sm">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required placeholder="Insira seu nome">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" class="form-control" id="telefone" name="telefone" required placeholder="Insira um número de telefone" >
                </div>

                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" class="form-control" id="idade" name="idade" required placeholder="Insira sua idade">
                </div>

                <fieldset class="border p-3 mt-4">
                    <legend>Endereço</legend>
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="number" class="form-control" id="cep" name="cep" required placeholder="Insira somente números">
                    </div>

                    <div class="form-group">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua" required placeholder="Insira sua rua">
                    </div>

                    <div class="form-group">
                        <label for="numero">Número:</label>
                        <input type="number" class="form-control" id="numero" name="numero" required placeholder="Insira o número da residência">
                    </div>

                    <div class="form-group">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ex: lote, quadra, etc" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required placeholder="Insira sua cidade">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado" required placeholder="Insira seu estado">
                    </div>
                </fieldset>

                <div class="form-group text-center mt-4">
                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </div>
            </div>
        </form>
    </main>

    <footer class="text-center mt-5">
        <p>&copy; 2024</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/cadastro.blade.php ENDPATH**/ ?>