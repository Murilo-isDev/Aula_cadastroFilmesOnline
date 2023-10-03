<?php

include "../conexao.php";

$id = $_POST["campoId"];
$genero = $_POST['campoGenero'];
$filme = $_POST['campoNome'];
$descricao = $_POST['campoDescricao'];
$diretor = $_POST['campoDiretor'];
$duracao = $_POST['campoDuracao'];
$estudante = $_POST['campoEstudante'];

$sql = "update filmes set genero='$genero', filme='$filme',
        descricao = '$descricao', diretor = '$diretor', duracao = '$duracao',
        estudante = '$estudante' where id = $id";

$conexao->query($sql);

header("location: ../index.php");