<?php
include "../conexao.php";

$genero = $_POST['campoGenero'];
$filme = $_POST['campoNome'];
$descricao = $_POST['campoDescricao'];
$diretor = $_POST['campoDiretor'];
$duracao = $_POST['campoDuracao'];
$estudante = $_POST['campoEstudante'];

$sql = "insert into filmes (genero, filme, descricao, diretor, duracao, estudante)
    values ('$genero', '$filme', '$descricao', '$diretor', '$duracao', '$estudante')";

$conexao->query($sql);

header("location: ../");