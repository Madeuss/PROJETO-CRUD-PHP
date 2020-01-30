<style>
    #name{
        width: 250px;
    }
    #date{
        width: 180px;
    }
    small{
        margin-bottom: 10px;
    }
    #title{
        font-size:25px;
        color: rgb(218, 145, 252);
    }
    #butt{
        background-color: rgb(218, 145, 253);
    }
    #id{
        width: 45px;
        text-align:center;
    }
</style>

<?php if(!isset($_GET['editar'])){ ?>
    <form method="post" action = "processaAluno.php" class="form-group">
        <label id="title" for="">CADASTRO DE ALUNOS</label>
        <input type="text" class="form-control" name="nome" id="name" placeholder="Ex.: Joselito Messi de Alcântara">
        <small id="helpname" class="form-text text-muted">Nome do Aluno</small>
        <input type="date" class="form-control" name="data_nasc" id="date" placeholder="">
        <small id="helpdate" class="form-text text-muted">Data de Nascimento</small>
        <button type="submit" class="btn btn-primary" id="butt">Submit</button>
    </form>

<?php } else{ ?>
    <?php while($linha = mysqli_fetch_array($consulta_aluno)){ ?>
        <?php if($linha['idAluno'] == $_GET['editar']){ ?>
            <form method="post" action = "edita_aluno.php" class="form-group">
                <label id="title" for="">EDITAR ALUNO</label>
                <!--input do id-->
                <input type="hidden" class="form-control" id="id" name="idAluno" value="<?php echo $linha['idAluno']; ?>">
               
                <input type="text" class="form-control" name="nome" id="name" placeholder="Ex.: Joselito Messi de Alcântara" value="<?php echo $linha['nome']; ?>">
                <small id="helpname" class="form-text text-muted">Nome do Aluno</small>
                <input type="date" class="form-control" name="data_nasc" id="date" placeholder="dd/mm/aaaa" value="<?php echo $linha['data_nasc']; ?>">
                <small id="helpdate" class="form-text text-muted">Data de Nascimento</small>
                <input type="submit" class="btn btn-primary" id="butt" value="Editar">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>