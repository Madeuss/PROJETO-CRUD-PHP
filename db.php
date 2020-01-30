<?php  
    # Conexão com o banco de dados MySQL **************
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "academia";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if($conexao == NULL){
        echo "Erro na conexão";
    }

    # CONSULTA DE ATIVIDADES
    $query = "SELECT * FROM ATIVIDADE";
    $consulta_atividade = mysqli_query($conexao, $query);

    # CONSULTA DE ALUNOS
    $query = "SELECT * FROM ALUNO";
    $consulta_aluno = mysqli_query($conexao, $query);

    # CONSULTA DE MATRICULAS
    $query = "SELECT a.idAluno, a.nome, c.nome_atividade, m.idMatricula 
    FROM aluno as a, atividade as c, matricula as m
    WHERE a.idAluno = m.idAluno AND c.idAtividade = m.idAtividade";
    $consulta_matricula = mysqli_query($conexao, $query);

