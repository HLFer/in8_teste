<?php
include_once 'app/Database.php';
$db = new Database();
$cadastros = $db->exibeCadastro();

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Henrique L. Fernandes">

    <title>Cadastro</title>

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="nav-link" href="https://in8.com.br/" target="_blank"><img src="img/logo-in8-dev.svg" alt="Logo" height="35"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">lista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://www.henriquefernandes.info" target="_blank">sobre mim</a>
            </li>
         </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>ESTÁGIO</strong>
            </h1>
          </div>
          <div class="col-lg-10 mx-auto">
            <p class="text-faded mb-8">PROVA DE SELEÇÃO</p>
          </div>
        </div>
      </div>
    </header>


    <!--Área de cadastro de usuários -->
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">

            <div class="cadastro" align="center">
              <p>CADASTRO</p>
            <form name="sentMessage" id="contactForm" action="app/cadastro.php" method="post">
              <div class="control-group col-md-8" align="left">

                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control" placeholder="Digite o Nome" id="name" required data-validation-required-message="O campo Nome é Obrigatório!">
                  <p class="help-block text-danger"></p>

              </div>

              <div class="control-group col-md-8" align="left">

                  <label>E-mail</label>
                  <input type="email" name="email" class="form-control" placeholder="Digite o Email" id="email" required data-validation-required-message="O campo Email é obrigatório!">
                  <p class="help-block text-danger"></p>

              </div>

              <div class="control-group col-md-8" align="left">

                  <label>Nascimento</label>
                  <input type="date" name="nascimento" class="form-control"></textarea>
                  <p class="help-block text-danger"></p>

              </div>

              <div class="control-group col-md-8" align="left">

                  <label>Telefone</label>
                  <input type="tel" name="telefone" class="form-control fa-underline" placeholder="Digite o Telefone" id="phone" required data-validation-required-message="O campo Telefone é obrigatório!">
                  <p class="help-block text-danger"></p>

              </div>
              <br>
                <div id="success"></div>
                  <div class="form-group" align="center">
                    <button type="submit" class="botao">CADASTRAR</button>
                  </div><br>
            </form>
          </div>
            </div>
          </div>
        </div>
    </section>
    <!--FIM da Área de cadastro de usuários -->



    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">LISTA DE CADASTRO</h2>
          </div>
          <div class="col-lg-12 text-center">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Nascimento</th>
                  <th>Telefone</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($cadastros as $key => $cadastro): ?>
                  <tr>
                    <td><?= $cadastro['id'] ?></td>
                    <td><?= $cadastro['nome'] ?></td>
                    <td><?= $cadastro['email'] ?></td>
                    <td><?= $cadastro['nascimento'] ?></td>
                    <td><?= $cadastro['telefone'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>

    <section id ="rodape"  class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">
        <?php 
        if(isset($cadastros)){
          print_r($cadastros[0]);
        }
        else
          echo "Desenvolvido por: Henrique L. Fernandes";
        ?>
        </h2>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
