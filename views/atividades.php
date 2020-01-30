<style>
    #tb-atividade{
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

<a href="?pagina=inserir_atividade" class="btn btn-success" id="new">Cadastrar Nova Atividade</a>
<table id="tb-atividade" class="table table-hover table-striped">
        <thead>  
            <tr>
                <th>Atividade</th>
                <th>Carga Horária</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead> 

        <tbody>
            <?php
                while($linha = mysqli_fetch_array($consulta_atividade)){
                    echo '<tr><td>'.$linha['nome_atividade'].'</td>';
                    echo '<td>'.$linha['carga_horaria'].'</td>';
            ?>
                    <td><a href="?pagina=inserir_atividade&editar=<?php echo $linha['idAtividade']; ?>" id="butt">
                        <span style = "color: #7ce4f9">
                            <i class="fas fa-edit"></i>
                        </span>
                    </a></td>
                    <td><a href="deleta_atividade.php?idAtividade=<?php echo $linha['idAtividade']; ?>" id="butt">
                        <span style = "color: #7ce4f9">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </a></td></tr>
            <?php
                }
            ?>
        </tbody>
</table>