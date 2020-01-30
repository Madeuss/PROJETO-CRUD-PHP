<h1>Inserir nova matrícula</h1>


<form method="post" action="processaMatricula.php">
	<br>
	<p class="badge badge-secondary" style = "background-color: #c1b4f6; border: none;">Selecione o aluno</p>
	<select class="form-control" name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_aluno)){
			echo '<option value="'.$linha['idAluno'].'">'.$linha['nome'].'</option>';
		}
		?>
	</select>

	<br><br>

	<p class="badge badge-secondary" style = "background-color: #c1b4f6; border: none;">Selecione o curso</p>
	<select class="form-control" name="escolha_atividade">
		<option>Selecione um curso</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_atividade)){
			echo '<option value="'.$linha['idAtividade'].'">'.$linha['nome_atividade'].'</option>';
		}
		?>
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Matricular aluno no curso" style = "background-color: #26c1e6; border: none;">
</form>