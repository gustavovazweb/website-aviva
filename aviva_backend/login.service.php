<?php

	class LoginService{


		private $conexao;
		private $login;		

		public function __construct(Conexao $conexao, Login $login){
			$this->conexao = $conexao->conectar();
			$this->login = $login;
		}


		public function logar(){
			$query = 'select id, nome from usuarios where email = :email and senha = md5(:senha)';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email',$this->login->__get('email'));
			$stmt->bindValue(':senha',$this->login->__get('senha'));
			$stmt->execute();

			$login = $stmt->fetch(\PDO::FETCH_ASSOC);

			if($login['id'] != '' && $login['nome'] != ''){
				$this->login->__set('id',$login['id']);
				$this->login->__set('nome',$login['nome']);
			}

			return $this;
		}


		public function cadastrar(){
			$query = 'select id, nome from usuarios where email = :email';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email',$this->login->__get('email'));
			$stmt->execute();

			$email = $stmt->fetch(\PDO::FETCH_ASSOC);

			if($email['id'] != '' && $email['nome'] != ''){
				header('location: index.php?status=usuario_existe');
				exit();
			}

			$query = 'insert into usuarios(nome,email,senha,confirma_senha)values(:nome,:email,md5(:senha),md5(:confirma_senha))';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome',$this->login->__get('nome'));
			$stmt->bindValue(':email',$this->login->__get('email'));
			$stmt->bindValue(':senha',$this->login->__get('senha'));
			$stmt->bindValue(':confirma_senha',$this->login->__get('confirma_senha'));
			$stmt->execute();
			
		}


		public function recuperar(){
			$query = 'select nome, email, senha, confirma_senha from usuarios';
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);

		}



	}

?>