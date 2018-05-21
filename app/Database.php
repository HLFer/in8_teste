<?php
Class Database
{
	private $_host, $_database, $_user, $_password;
	function Database()
	{
		$this->_host = "127.0.0.1";
		$this->_database = "in8_teste";
		$this->_user = "root";
		$this->_password = "";
	}
	private function _connect()
	{
		return new PDO("mysql:host={$this->_host};dbname={$this->_database}", $this->_user, $this->_password);
	}
	
	public function registraCadastro($data)
	{
		$sql = "INSERT INTO cadastros (nome, email, nascimento, telefone) VALUES ('{$data['nome']}', '{$data['email']}', '{$data['nascimento']}', '{$data['telefone']}')";   
		
		try 
		{
			$conn = $this->_connect();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$conn = null;
		}
		
		catch (Exception $ex)
		{
			echo($ex->getMessage()); 
			exit();
		}
	}
	public function exibeCadastro()
	{
		$sql = "SELECT id , nome, email, nascimento, telefone FROM cadastros ORDER BY id DESC LIMIT 4";
		
		try
		{
			$conn = $this->_connect();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$conn = null;
			$cadastro = $stmt->fetchAll();
		}
		catch (Exception $ex)
		{
			echo($ex->getMessage()); 
			exit();
		}

		return $cadastro;
	}
}
