<?php

  $acao = 'recuperar';
  require 'login_controller.php';
  require 'verifica_login.php';   

?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head> 
      <title>Azura Sistemas</title>     
      <!-- META TAGS -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="author" content="Gustavo Vaz">
      <meta name="descryption" content="Desenvolvimento de Sistemas web e Tecnologia">
      <meta name="keywords" content="sistemas,web,tecnologia,software,suporte,ti">
      <meta name="robots" content="index,follow">
      <!-- CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- CUSTOM -->
      <link rel="stylesheet" href="css/custom.css"> 
      <!-- ICON MATERIAL -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- FAVICON -->
      <link rel="icon" href="img/icon.png">     
    </head>
    <body>
      <!-- NAVBAR -->
      <div class="navbar-fixed">
      <nav class="purple lighten-2">
          <div class="nav-wrapper container">
            <a href="painel.php" class="brand-logo"><img class="logo" src="img/logo.png"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="painel.php">Retornar</a></li>              
              <li>|</li>            
              <li><a class="dropdown-trigger" data-target="dropdown1"><?= $_SESSION['usuario'] ?><i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
        </div>
        <!-- DROPDOWN CONTENT 1 -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!"><i class="material-icons">account_circle</i><?= $_SESSION['usuario'] ?></a></li>
          <li><a href="editar_perfil.php">Editar perfil</a></li>
          <li class="divider"></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <!-- DROPDOWN CONTENT 2 -->
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="#!"><i class="material-icons">account_circle</i><?= $_SESSION['usuario'] ?></a></li>
          <li><a href="editar_perfil.php">Editar perfil</a></li>
          <li class="divider"></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
      <!-- SIDENAV -->
        <ul id="slide-out" class="sidenav">                     
           <li><a href="painel.php">Retornar</a></li>              
           <li>|</li>            
           <li><a class="dropdown-trigger" data-target="dropdown2"><?= $_SESSION['usuario'] ?><i class="material-icons right">arrow_drop_down</i></a></li>
         </ul>
      <!-- HOME -->
        <section class="home bloco scrollspy" id="home">
          <div class="row container">
            <div class="col s12 m6">
              <div class="formulario center-align">
                <h6>Perfil do Usuário</h6>
                
                <div>
                  
                  <?php foreach ($usuarios as $indice => $usuario) { ?>
                    <div class="row mb-3 d-flex align-items-center tarefa">
                      <div class="col-sm-9" id="usuario_<?= $usuarios->id ?>">
                        <?= $usuario->email ?>
                      </div>                            
                    </div>
                  <?php } ?>

                </div>                
            </div>
            </div>
          </div>
        </section>             
      <!-- JQUERY -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- JAVASCRIPT -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!-- JQUERY CODE -->
      <script>        
        $(document).ready(function(){
          //SIDENAV 
            $('.sidenav').sidenav();

          //SCROLLSPY
            $('.scrollspy').scrollSpy({
            scrollOffset:80
            });

          //DROPDOWN
          $(".dropdown-trigger").dropdown();
          });
      </script>
    </body>
  </html>