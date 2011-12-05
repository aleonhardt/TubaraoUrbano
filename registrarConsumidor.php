<?php
include 'DatabaseControl.php';

if($_POST['registro'] == "Registrar")
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
	
	addConsumidor($email, $nome, $senha, $sexo, $interesses, $nascimento);
	
		
  }



?>