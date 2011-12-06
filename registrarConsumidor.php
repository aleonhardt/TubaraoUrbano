<?php
include 'DatabaseControl.php';

if($_POST['registro'] == "Registrar Consumidor")
  {
   
    $email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$sexo = $_POST['sexo'];
	$interesses = "";
	if(isset($_POST['gastronomia']))
	{
		$interesses = $interesses . "G";
	}
	if(isset($_POST['entretenimento']))
	{
		$interesses = $interesses . "N";
	}
	if(isset($_POST['turismo']))
	{
		$interesses = $interesses . "T";
	}
	if(isset($_POST['moda']))
	{
		$interesses = $interesses . "M";
	}
	if(isset($_POST['estetica']))
	{
		$interesses = $interesses . "E";
	}

	$nascimento = $_POST['nascimento'];
	
		
	$result = addConsumidor($email, $nome, $senha, $sexo, $interesses, $nascimento);
	
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