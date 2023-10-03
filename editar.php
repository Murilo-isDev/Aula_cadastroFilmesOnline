<?php
include "conexao.php";

if(!isset($_GET) || $_GET['id'] == "") {
    header("location: ./");
    exit();
}

// Pega valor do ID da URL
$id = $_GET['id'];

// Armazena código SQL para a busca do registro selecionado
$sql = "select * from filmes where id = $id";

// Executa código SQL no DB
$rs = $conexao->query($sql);

// Pega dados retornados do DB e coloca na variável $item
$item = mysqli_fetch_object($rs);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite o Filme</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Edite o Cadastro do Filme</h1>
        <form action="actions/edit.php" method="post">
            <input type="hidden" name="campoId" value="<?php echo $id; ?>">

            <div class="mb-3">
                <label for="idGenero" class="form-label">Gênero:</label>
                <input type="text" class="form-control" name="campoGenero" value="<?php echo $item->genero; ?>"  id="idGenero" placeholder="Comédia">
            </div>
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="campoNome" value="<?php echo $item->filme; ?>" id="idNome" placeholder="Seu nome completo">
            </div>
            <div class="mb-3">
                <label for="idDescricao" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="campoDescricao" value="<?php echo $item->descricao; ?>" id="idDescricao" placeholder="O filme tem como personagem principal o Adam Sandler ...">
            </div>
            <div class="mb-3">
                <label for="idDiretor" class="form-label">Diretor:</label>
                <input type="text" class="form-control" name="campoDiretor" value="<?php echo $item->diretor; ?>" id="idDiretor" placeholder="Dennis Dugan">
            </div>
            <div class="mb-3">
                <label for="idDuracao" class="form-label">Duração:</label>
                <input type="time" class="form-control" name="campoDuracao" value="<?php echo $item->duracao; ?>" id="idDuracao" placeholder="2">
            </div>
            <div class="mb-3">
                <label for="idEstudante" class="form-label">Estudante:</label>
                <input type="text" class="form-control" name="campoEstudante" value="<?php echo $item->estudante; ?>" id="idEstudante" placeholder="Murilo Nunes Braga">
            </div>
        
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="./" class="btn btn-primary">Voltar</a>
        </form>



        <!-- Bootstrap - CSS -->
        <script src="js/bootstrap.js"></script>
</body>

</html>