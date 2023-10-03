<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicione Um Filme</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="actions/add.php" method="post">
        <div class="mb-3">
                <label for="idGenero" class="form-label">Gênero:</label>
                <input type="text" class="form-control" name="campoGenero" id="idGenero" placeholder="Comédia" minlength="1" maxlength="45">
            </div>
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="campoNome" id="idNome" placeholder="Seu nome completo" minlength="1" maxlength="45">
            </div>
            <div class="mb-3">
                <label for="idDescricao" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="campoDescricao" id="idDescricao" placeholder="O filme tem como personagem principal o Adam Sandler ..." minlength="1" maxlength="45">
            </div>
            <div class="mb-3">
                <label for="idDiretor" class="form-label">Diretor:</label>
                <input type="text" class="form-control" name="campoDiretor" id="idDiretor" placeholder="Dennis Dugan" minlength="1" maxlength="45">
            </div>
            <div class="mb-3">
                <label for="idDuracao" class="form-label">Duração:</label>
                <input type="time" class="form-control" name="campoDuracao" id="idDuracao" placeholder="2">
            </div>
            <div class="mb-3">
                <label for="idEstudante" class="form-label">Estudante:</label>
                <input type="text" class="form-control" name="campoEstudante" id="idEstudante" placeholder="Murilo Nunes Braga" minlength="1" maxlength="45">
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="./" class="btn btn-primary">Voltar</a>
        </form>

        <!-- Bootstrap - CSS -->
        <script src="js/bootstrap.js"></script>
</body>

</html>