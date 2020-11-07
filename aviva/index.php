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
            <img src="img/logo.png" width="200">
          </a>
<!-- Botão Sidenav -->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar1">
            <i class="fas fa-bars text-white"></i>
          </button>
<!-- Menu -->
          <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">            
              <button type="button" data-toggle="modal" data-target="#exampleModal3">Músicas</button>
              <button type="button" data-toggle="modal" data-target="#exampleModal3">Premium</button>       
              <li class="nav-item divisor">|</li>
<!-- Menu Botão Entrar -->
              <button type="button" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Entrar</button>
<!-- Menu Botão Inscreva-se-->
              <button type="button" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Inscreva-se</button>
            </ul>
          </div>
        </div>        
      </nav>
    </header>
<!-- Modal Conteúdo Login -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title colorh5" id="exampleModalLabel">Entrar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="login_controller.php?acao=logar">
            <div class="modal-body">           
              <div class="form-group">
                <label for="recipient-name" class="col-form-label text-form">Login:</label>
                <input type="text" class="form-control" id="recipient-name" name="email">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label text-form">Senha:</label>
                <input type="password" class="form-control" id="recipient-name" name="senha">
              </div>           
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn3 btn-padrao">Entrar</button>                  
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- Modal Conteúdo Inscreva-se -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title colorh5" id="exampleModalLabel">Inscreva-se</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="login_controller.php?acao=cadastrar">
            <div class="modal-body">            
              <div class="form-group">
                <label for="recipient-name" class="col-form-label text-form">Nome completo:</label>
                <input type="text" class="form-control" id="recipient-name" name="nome">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label text-form">Email:</label>
                <input type="email" class="form-control" id="recipient-name" name="email" placeholder="exemplo@email.com">
              </div>             
              <div class="form-group">
                <label for="recipient-name" class="col-form-label text-form">Senha:</label>
                <input type="password" class="form-control" name="senha" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label text-form">Confirme a Senha:</label>
                <input type="password" class="form-control" name="confirma_senha" id="recipient-name">
              </div>           
            </div>
            <div class="modal-footer">           
              <button type="submit" class="btn btn3 btn-padrao">Cadastrar</button>           
            </div>
          </form>
        </div>
      </div>
    </div> 
<!-- Modal Conteúdo Faça Login -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title colorh5" id="exampleModalLabel">Atenção</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-form">Faça Login ou Cadastre-se para continuar.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-padrao btn3" data-dismiss="modal">Ok</button>   
          </div>
        </div>
      </div>
    </div>
<!-- Banner -->
    <section id="home" class="d-flex">
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-12 style1">
<!-- Carousel -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
<!-- Banner Conteúdo 1 -->
                <div class="carousel-item active">
                  <h1>Músicas para você</h1>
                  <a href="#" class="btn btn-danger btn1 btn-padrao" data-toggle="modal" data-target="#exampleModal3">Aproveite versão Free</a>
                  <a href="#" class="btn btn-light btn2 btn-padrao" data-toggle="modal" data-target="#exampleModal3">Obter Versão Premium</a>
                </div>
<!-- Banner Conteúdo 2 -->
                <div class="carousel-item">
                  <h1>Melhores hits da web</h1>
                  <a href="#" class="btn btn-danger btn1 btn-padrao" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-music"></i> Ouça agora</a>                  
                </div>
<!-- Banner Conteúdo 3 -->
                <div class="carousel-item">
                  <h1>Agora com Podcast</h1>
                  <a href="#" class="btn btn-danger btn1 btn-padrao" data-toggle="modal" data-target="#exampleModal3">Ouvir Podcast</a>
                  <a href="#" class="btn btn-light btn2 btn-padrao" data-toggle="modal" data-target="#exampleModal3">Gravar Podcast</a>         
                </div>
<!-- Carousel Botões-->
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Seção Serviços -->
    <section id="servicos">
      <div class="container">
        <div class="row">
<!-- Seção Serviços Imagens -->
          <div class="col-md-6">
<!-- Seção Serviços bloco 1 -->            
            <div class="row albuns margin-padrao">
              <div class="col-md-6">
                <img src="img/img1.jpg" class="img-fluid d-none d-md-block">
              </div>
              <div class="col-md-6">
                <img src="img/img2.jpg" class="img-fluid d-none d-md-block">
              </div>
            </div>
<!-- Seção Serviços bloco 2 -->
            <div class="row albuns margin-padrao">
              <div class="col-md-6">
                <img src="img/img3.jpg" class="img-fluid d-none d-md-block">
              </div>
              <div class="col-md-6">
                <img src="img/img4.jpg" class="img-fluid d-none d-md-block">
              </div>
            </div>
          </div>
<!-- Seção Serviços Textos -->
          <div class="col-md-6">
            <div class="margin-padrao">
              <h2>O que temos para você?</h2>
              <h3>Músicas</h3>
              <p>Temos milhões de músicas. Reúna seus favoritos em um só lugar e aproveite para descubrir novas músicas.</p>
              <h3>Playlists</h3>
              <p>Aqui você encontra uma playlist para cada momento. Todas personalizadas e feitas por especialistas fanáticos por música.</p>
              <h3>Podcasts</h3>
              <p>Escute diversos podcasts. Não esqueça que aqui você poderá compartilhar e enviar os seus favoritos com seus amigos do Avivamusic.</p>&nbsp
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Seção Recursos -->
    <section id="recursos">
      <div class="container">
        <div class="row">
<!-- Seção Recursos Textos -->
          <div class="col-md-4 margin-padrao">
            <h2>Super Fácil</h2>
            <h3>Procure</h3>
            <p>Já sabe qual música quer ouvir? Então é só procurar e apertar o play.</p>
            <h3>Navegue</h3>
            <p>Veja os novos lançamentos, os hits que estão bombando na web e as melhores playlists para o seu momento.</p>
            <h3>Descubra</h3>
            <p>Curta músicas novas todos os dias faça uma playlist personalizada pra você. Ou ouça alguns dos nossos podcasts.</p>
          </div>
<!-- Seção Recursos Imagens -->
          <div class="col-md-8">
            <div class="row rotacao">
              <div class="col-md-6">
                <img src="img/phone1.png" class="img-fluid d-none d-md-block">
              </div>
              <div class="col-md-6">
                <img src="img/phone2.png" class="img-fluid d-none d-md-block">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Rodapé -->
    <footer id="rodape">
      <div class="container">
        <div class="row">
<!-- Rodapé Logo -->          
          <div class="col-md-2">
            <img src="img/logo-original.png" width="160">
          </div>
<!-- Rodapé Links -->          
          <div class="col-md-2">
            <h4>Empresa</h4>
            <ul class="navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Novidades</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Comunidades</h4>
            <ul class="navbar-nav">
              <li><a href="#">Parceiros</a></li>
              <li><a href="#">Desenvolvedores</a></li>
              <li><a href="#">Marcas</a></li>              
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Links úteis</h4>
            <ul class="navbar-nav">
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Ajuda</a></li>
              <li><a href="#">Suporte</a></li>              
            </ul>
          </div>
<!-- Rodapé Social Links -->          
          <div class="col-md-4">
            <ul>
              <li>
                <a href="#"><i class="fab fa-pinterest fa-2x"></i></a>
              </li> 
              <li>
                <a href="#"><i class="fab fa-snapchat fa-2x"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
              </li> 
              <li>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
              </li>             
              <li>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
              </li>                                  
            </ul> 
          </div>
        </div>
      </div>
    </footer>
    <!--MENSAGENS-->
    <?php if(isset($_GET['status']) && $_GET['status'] == 'invalido'){ ?>      
              <script>
                   alert('Favor digite um email e/ou senha válido(s)!')         
              </script>
          <?php } ?>
          <!-- TOAST CADASTRADO -->
          <?php if(isset($_GET['status']) && $_GET['status'] == 'cadastrado'){ ?>      
              <script>
                   alert('Cadastro efetuado com sucesso!')         
              </script>
          <?php } ?>
          <!-- CAMPOS VAZIOS -->
          <?php if(isset($_GET['status']) && $_GET['status'] == 'vazio'){ ?>      
              <script>
                   alert('Favor preencha todos os campos obrigatórios!*')         
              </script>
          <?php } ?> 
          <!-- CAMPOS OBRIGATÓRIOS -->
          <?php if(isset($_GET['status']) && $_GET['status'] == 'diferente'){ ?>      
              <script>
                   alert('ERRO: Senhas não confirmam, tente fazer o cadastro novamente!')         
              </script>
          <?php } ?> 
          <!-- USUÁRIO JÁ EXISTE -->
          <?php if(isset($_GET['status']) && $_GET['status'] == 'usuario_existe'){ ?>      
              <script>
                   alert('ERRO: Email já cadastrado, usuário já possui uma conta ativa!')         
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