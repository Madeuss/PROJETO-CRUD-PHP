<?php

include 'db.php';
$idAtividade = $_POST['idAtividade'];
$nome_atividade = $_POST['nome_atividade'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE ATIVIDADE SET nome_atividade = '$nome_atividade', carga_horaria = $carga_horaria 
WHERE idAtividade = $idAtividade";

mysqli_query($conexao, $query);

header('location:index.php?pagina=atividades');