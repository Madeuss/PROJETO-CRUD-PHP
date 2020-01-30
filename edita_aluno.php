<?php

include 'db.php';
$idAluno = $_POST['idAluno'];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];

$query = "UPDATE ALUNO SET nome = '$nome', data_nasc = '$data_nasc'
WHERE idAluno = $idAluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');