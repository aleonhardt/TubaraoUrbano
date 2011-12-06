<?php
include 'DatabaseControl.php';
	
	$senhaDB = "aquitemmaisdoquedezesseiscaracteres";

if($_POST['login'] == "Login Consumidor")
  {
	$row = getDatabaseData("consumidor", "email", $_POST['email']);
	if ($row != "")
	{$senhaDB = $row[0]['senha'];}
	
  }


if($_POST['login'] == "Login Fornecedor")
  {
	$row = getDatabaseData("fornecedor", "nomeempresa", $_POST['nomeempresa']);
	
	print_r($row);
	
	if ($row != "")
	{$senhaDB = $row[0]['senha'];}
	
  }
  //echo $_POST['senha'];
  //echo $senhaDB;
 
if($_POST['senha'] == $senhaDB)
	{
		echo "<h1>Login efetuado com sucesso: <a href=\"index.html\">Home</a> </li></h1>";
	}
	else
	{
		echo "<h1>Senha, email ou nome da empresa incorreto: <a href=\"index.html\">tente novamente!</a> </li> </h1>";
}	
 
?>