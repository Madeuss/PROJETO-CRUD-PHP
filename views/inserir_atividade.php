<style>
    #name{
        width: 250px;
    }
    #hour{
        width: 80px;
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
    <form method="post" action = "processaAtividade.php" class="form-group">
        <label id="title" for="">CADASTRO DE ATIVIDADES</label>
        <input type="text" class="form-control" name="nome_atividade" id="name" placeholder="Ex.: Futmesa">
        <small id="helpname" class="form-text text-muted">Nome da Atividade</small>
        <input type="number" class="form-control" name="carga_horaria" id="hour" placeholder="Ex.:4">
        <small id="helpdate" class="form-text text-muted">Carga Horária Diária<br>(em horas)</small>
        <button type="submit" class="btn btn-primary" id="butt">Submit</button>
    </form>

<?php } else{ ?>
    <?php while($linha = mysqli_fetch_array($consulta_atividade)){ ?>
        <?php if($linha['idAtividade'] == $_GET['editar']){ ?>
            <form method="post" action = "edita_atividade.php" class="form-group">
                <label id="title" for="">EDITAR ATIVIDADE</label>
                <!--input do id-->
                <input type="hidden" class="form-control" id="id" name="idAtividade" value="<?php echo $linha['idAtividade']; ?>">

                <input type="text" class="form-control" name="nome_atividade" id="name" placeholder="Ex.: Futmesa" value="<?php echo $linha['nome_atividade']; ?>">
                <small id="helpname" class="form-text text-muted">Nome da Atividade</small>
                <input type="number" class="form-control" name="carga_horaria" id="hour" placeholder="Ex.:4" value="<?php echo $linha['carga_horaria']; ?>">
                <small id="helpdate" class="form-text text-muted">Carga Horária Diária<br>(em horas)</small>
                <input type="submit" class="btn btn-primary" id="butt" value="Editar">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>