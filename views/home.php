<style>
    #title{
        width: 90%;
        height: auto;
        text-align: center;
    }
    form{
        margin: 0 auto;
        width: 500px;
    }
    button{
        margin-left: 15px;
        padding: 0 auto;
    }
    .input-group{
        width: 310px;
    }
</style>
<div id="title">
    <h1>Bem-vindo</h1>
</div>
<form method="post" action="login.php">
  <div class="form-group">
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Usuário</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="usuario" id="validationDefaultUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Senha</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-unlock-alt"></i></span>
            </div>
            <input type="password" class="form-control" name="senha" id="validationDefault02" placeholder="Senha" value="" required>
        </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Login</button>
</form>
<br>
<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos
    </div>
<?php } ?>