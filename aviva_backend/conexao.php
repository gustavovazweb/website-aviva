<?php

	class Conexao{

		private $host = 'localhost';
		private $dbname = 'aviva';
		private $user = 'root';
		private $pass = '';

		public function conectar(){

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;
		}
	}


?>