<?php

#iniciar sessão
session_start();

#base de dados
include 'db.php';

#cabeçalho
include 'views/header.php';

#conteudo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'alunos';
	}
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'atividades': include 'views/atividades.php'; break;
	case 'alunos': include 'views/alunos.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	case 'inserir_atividade': include 'views/inserir_atividade.php'; break;
	default: include 'views/home.php'; break;
}
#rodapé
include 'views/footer.php';
