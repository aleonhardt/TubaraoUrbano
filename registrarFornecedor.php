<?php
include 'DatabaseControl.php';

if($_POST['registro'] == "Registrar Fornecedor")
  {
	$emailpagseguro = $_POST['emailpagseguro'];
	$nomeempresa = $_POST['nomeempresa'];
	$senha = $_POST['senha'];
	$cnpj = $_POST['cnpj'];
	$endereco = $_POST['endereco'];
	$contrato = "";
	
	$result = addFornecedor($nomeempresa, $cnpj, $endereco, $emailpagseguro, $contrato, $senha);
		
	if($result == 1)
	{
		echo "<h1>Registrado com sucesso: <a href=\"index.html\">Home</a> </li></h1>";
	}
	else
	{
		echo "<h1>Registro falhou: <a href=\"index.html\">tente novamente!</a> </li> </h1>";
	}
	
  }

?>