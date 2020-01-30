<style>
    #tb-aluno{
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

<a href="?pagina=inserir_aluno" class="btn btn-success" id="new">Cadastrar Novo Aluno</a>
<table id="tb-aluno" class="table table-hover table-striped">
    <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
    </thead>

    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_aluno)){
                echo '<tr><td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['data_nasc'].'</td>';
        ?>
                <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['idAluno']; ?>" id="butt">
                    <span style = "color: #7ce4f9">
                        <i class="fas fa-user-edit"></i>
                    </span>
                </a></td>
                <td><a href="deleta_aluno.php?idAluno=<?php echo $linha['idAluno']; ?>" id="butt">
                    <span style = "color: #7ce4f9">
                        <i class="fas fa-user-times"></i>
                    </span>
                </a></td></tr>
        <?php
            }
        ?>
    </tbody>
</table>