<style>
    #tb-matricula{
        border: 1px solid #ccc;
        width: 100%; 
        padding: 10px auto;
        margin-bottom:10px;
    }
    #new{
        border:none;
        border-radius: 5px; 
        padding: 5px;
        margin: 0 auto;
        background-color: #c1b4f6;
    }
    #new:hover{
        background-color: rgb(218, 145, 252);
    }
    #butt{
        width: 65px;
        height: 50px;
        border: none;
        margin: 5px 0 0 20px;
        padding: 10px;
    }
</style>

<a href="?pagina=inserir_matricula" class="btn btn-success" id="new">Nova Matricula</a>
<table id="tb-matricula" class="table table-hover table-striped"> 
    <thead>      
        <tr>
            <th>Id Aluno</th>
            <th>Nome</th>
            <th>Atividade</th>
            <th>Número da Matrícula</th>
            <th>Apagar</th>
        </tr>
    </thead> 

    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_matricula)){
                echo '<tr><td>'.$linha['idAluno'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['nome_atividade'].'</td>';
                echo '<td>'.$linha['idMatricula'].'</td>';
        ?>
                <td><a href="deleta_matricula.php?idMatricula=<?php echo $linha['idMatricula']; ?>" id="butt">
                    <span style = "color: #7ce4f9">
                        <i class="fas fa-calendar-times"></i>
                    </span>
                </a></td></tr>
        <?php
            }
        ?>
    </tbody>
</table> 