<?php

	class Login{

		private $id;
		private $nome;
		private $email;
		private $senha;
		private $confirma_senha;
		private $data_cadastro;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}

	}

?>