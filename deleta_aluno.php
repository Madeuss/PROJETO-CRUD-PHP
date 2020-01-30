<?php 

include 'db.php';

$idAluno = $_GET['idAluno'];

$query = "DELETE FROM ALUNO WHERE IDALUNO = $idAluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
