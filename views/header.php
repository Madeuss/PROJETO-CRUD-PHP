<!doctype html>
<html lang="en">
  <head>
    <title>CRUD PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Link Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/8ce0be3cc7.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script_jquery.js"></script>
    <header>
        <div class="container">
           <a href="?pagina=home"><img src="img/timao.png" title="logo" alt="Logo"></a>
            <div id="menu">
                <ul>
                    <li><a href="?pagina=alunos">Aluno</a></li>
                    <li><a href="?pagina=atividades">Atividades</a></li>
                    <li><a href="?pagina=matriculas">Matrícula</a></li>
                    <?php if(isset($_SESSION['login'])){ ?>
                        <li style="background-color: rgb(218, 145, 252);"><a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a></li>                    
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">

