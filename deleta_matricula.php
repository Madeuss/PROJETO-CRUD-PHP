<?php 

include 'db.php';

$idMatricula = $_GET['idMatricula'];

$query = "DELETE FROM MATRICULA WHERE idMatricula = $idMatricula";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
