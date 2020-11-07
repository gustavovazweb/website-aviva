<?php

	session_start();

	require_once '../../aviva_backend/conexao.php';
	require_once '../../aviva_backend/login.model.php';
	require_once '../../aviva_backend/login.service.php';
	

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;	


		if($acao == 'logar'){

			if(empty($_POST['email']) || empty($_POST['senha'])){
				header('location: index.php?status=invalido');
				exit;
			} 

			$conexao = new Conexao();

			$login = new Login();
			$login->__set('email',$_POST['email']);
			$login->__set('senha',$_POST['senha']);

			$loginService = new LoginService($conexao, $login);
			$loginService->logar();

			if($login->__get('id') != '' && $login->__get('nome') != ''){
				$_SESSION['usuario'] = $login->__get('nome');
				header('location: painel.php');	
			}else{
				header('location: index.php?status=invalido');	
			}


		}else if($acao == 'cadastrar'){
		
			if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['confirma_senha'])){
				header('location: index.php?status=vazio');
				exit;
			}

			if($_POST['confirma_senha'] != $_POST['senha']){
				header('location: index.php?status=diferente');
				exit;
			}

			$conexao = new Conexao();

			$login = new Login();
			$login->__set('nome',$_POST['nome']);			
			$login->__set('email',$_POST['email']);
			$login->__set('senha',$_POST['senha']);
			$login->__set('confirma_senha',$_POST['confirma_senha']);

			$loginService = new LoginService($conexao, $login);
			$loginService->cadastrar();

			header('location: index.php?status=cadastrado');


		}else if($acao == 'recuperar'){

			$conexao = new Conexao();

			$login = new Login();

			$loginService = new LoginService($conexao, $login);
			$usuarios = $loginService->recuperar();

		}


?>