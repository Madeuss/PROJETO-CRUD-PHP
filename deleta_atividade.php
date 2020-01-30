<?php 

include 'db.php';

$idAtividade = $_GET['idAtividade'];

$query = "DELETE FROM ATIVIDADE WHERE idAtividade = $idAtividade";

mysqli_query($conexao, $query);

header('location:index.php?pagina=atividades');
