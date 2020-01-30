<?php
    include 'db.php';

    $idAluno = $_POST['escolha_aluno'];
    $idAtividade = $_POST['escolha_atividade'];

    $query = "INSERT INTO MATRICULA(idAluno, idAtividade) VALUES('$idAluno', '$idAtividade')";
    mysqli_query($conexao, $query);

    header('location:index.php?pagina=matriculas');