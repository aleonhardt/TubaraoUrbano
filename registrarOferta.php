<?php
include 'DatabaseControl.php';

if($_POST['enviar'] == "Enviar Oferta")
  {
   
    $nomeproduto = $_POST['nomeproduto'];
	$descricao = $_POST['descricao'];
	$foto = $_POST['foto'];
	$precooriginal = $_POST['precooriginal'];
	$precovenda = $_POST['precovenda'];
	$fornecedor = $_POST['fornecedor'];
	$validade = $_POST['validade'];
	$categoria = $_POST['categoria'];
	
	$vendidos = 0;
		
	$result =  addOferta($nomeproduto, $descricao, $foto, $precooriginal, $precovenda, $fornecedor, $validade, $vendidos, $categoria);
	
	if($result == 1)
	{
		echo "<h1>Oferta registrada com sucesso: <a href=\"index.html\">Home</a> </li></h1>";
	}
	else
	{
		echo "<h1>Registro falhou: <a href=\"index.html\">tente novamente!</a> </li> </h1>";
	}
		
  }

?>