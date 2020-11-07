<?php

  session_start();
  require 'verifica_login.php';  

?>
<!doctype html>
<html lang="pt-br">
  <head>
<!-- Title -->
     <title>Just Music - Aviva</title>
<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Gustavo Vaz">
    <meta name="description" content="Músicas Online">
    <meta name="keywords" content="música,podcasts,audio,canções">
<!-- Favicon -->
    <link rel="icon" href="img/icon.png">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Custom CSS -->   
    <link rel="stylesheet" href="css/custom.css">
<!-- Bootstrap Fonts Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
<!-- Cabeçalho -->
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparent">
        <div class="container">
<!-- Logo -->
          <a href="index.html" class="navbar-brand">
            <img src="img/icon.png" width="45">
          </a>
          <h6 style="margin-top: 15px; color: #fff; font-size: 1.5rem; font-weight: 1000;">Bem-vindo(a)</h6>
<!-- Botão Sidenav -->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar1">
            <i class="fas fa-bars text-white"></i>
          </button>
<!-- Menu -->
          <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">
              <button type="button" data-toggle="modal" data-target="#exampleModal1">Favoritas</button>
              <button type="button" data-toggle="modal" data-target="#exampleModal2">Suporte</button> 
              <button type="button" data-toggle="modal" data-target="#exampleModal3">Contato</button>       
              <li class="nav-item divisor">|</li>      
              <!-- NAVBAR MENU -->
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">              
                  <li class="nav-item dropdown">                
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo $_SESSION['usuario']; ?>
                    </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="logout.php">
                      <button class="btn btn-outline-success text-dark my-2 my-sm-0 dropdown-item" type="button" data-toggle="modal" data-target="#modal_manual">Sair
                      </button>
                    </a>
                  </div>               
                  </li>      
                </ul>                       
              </div>                       
            </ul>
          </div>
        </div>        
      </nav>
    </header>
    <!-- Modal Mensagem -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title colorh5" id="exampleModalLabel">Favoritas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-form">Você ainda não possui músicas favoritas!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-padrao btn3" data-dismiss="modal">Ok</button>   
          </div>
        </div>
      </div>
    </div>    
    <!-- Modal Suporte -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">              
              <form method="post" action="mail.php">
                <div class="modal-body">
                 <h5 class="modal-title colorh5" id="exampleModalLabel">Suporte</h5>          
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label text-form">Nome completo:</label>
                    <input type="text" class="form-control" id="recipient-name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label text-form">Email:</label>
                    <input type="email" class="form-control" id="recipient-name" name="email" placeholder="exemplo@email.com">
                  </div>             
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label text-form">Assunto</label>
                    <input type="text" class="form-control" name="subject" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label text-form">Mensagem:</label>
                    <textarea type="password" class="form-control" name="message" id="recipient-name"></textarea>
                    </div>           
                </div>
                <div class="modal-footer">           
                  <button type="submit" class="btn btn3 btn-padrao">Cadastrar</button>           
                </div>
              </form>
            </div>
          </div>
        </div> 
        <!-- Modal Contato -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title colorh5" id="exampleModalLabel">Contato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="text-form">Capitais: 0800 2525 689</p>
                <p class="text-form">Interior: 011 3355-5050</p>
                <p class="text-form">Whatsapp: 011 3355-8000</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-padrao btn3" data-dismiss="modal">Ok</button>   
              </div>
            </div>
          </div>
        </div>    
<!--Seção Principal-->
    <section id="home" class="d-flex">
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-6">
            <img style="width: 650px;" src="img/logo-original.png">
          </div>                         
        </div>        
      </div>
    </section>
    <!-- GET MENSAGENS -->
    <!-- USUÁRIO JÁ EXISTE -->
        <?php if(isset($_GET['status']) && $_GET['status'] == 'erro'){ ?>      
          <script>
            alert('Falha ao enviar mensagem, tente novamente...')         
          </script>
      <?php } ?> 
      <?php if(isset($_GET['status']) && $_GET['status'] == 'sucesso'){ ?>      
          <script>
            alert('Mensagem enviada com sucesso, entraremos em contato dentro de algumas horas!')         
          </script>
      <?php } ?> 
<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>