<?php
    include 'db.php';

    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];

    $query = "INSERT INTO ALUNO(nome, data_nasc) VALUES('$nome', '$data_nasc')";
    mysqli_query($conexao, $query);

    header('location:index.php?pagina=alunos');