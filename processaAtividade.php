<?php
    include 'db.php';

    $nome_atividade = $_POST['nome_atividade'];
    $carga_horaria = $_POST['carga_horaria'];

    $query = "INSERT INTO ATIVIDADE(nome_atividade, carga_horaria) VALUES('$nome_atividade', '$carga_horaria')";
    mysqli_query($conexao, $query);

    header('location:index.php?pagina=atividades');
