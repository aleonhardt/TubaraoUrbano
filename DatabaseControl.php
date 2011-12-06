<?php
function getDatabaseData($table, $key, $THEkey)
{

$con = mysql_connect('localhost', 'root');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tubaraourbano", $con);

$sql="SELECT * FROM ".$table." WHERE ".$key." = '".$THEkey."'";

$result = mysql_query($sql);
if(mysql_num_rows($result)<1){
	return "";
	}
	else{
 while ($aRow = mysql_fetch_array($result)) {
        $aResult[]= $aRow;
    }
	return $aResult; 

}

}

function addConsumidor($email, $nome, $senha, $sexo, $interesses, $nascimento)
{
	$con = mysql_connect('localhost', 'root');
	if(!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
		
	mysql_select_db("tubaraourbano", $con);
	
	$sql = "INSERT INTO consumidor VALUES('".$email."','".$nome."','".$sexo."','".$nascimento."','".$senha."','".$interesses."')";
	$result = mysql_query($sql);
	mysql_close($con);
	
	return $result;
}

function addFornecedor($nomeempresa, $cnpj, $endereco, $emailpagseguro, $contrato, $senha)
{
	$con = mysql_connect('localhost', 'root');
	if(!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
		
	mysql_select_db("tubaraourbano", $con);
	
	$contrato = "verificar";
	
	$sql = "INSERT INTO fornecedor VALUES('".$nomeempresa."','".$cnpj."','".$endereco."','".$emailpagseguro."','".$contrato."','".$senha."')";
	$result = mysql_query($sql);
	
	mysql_close($con);
	return $result;
}

function addOferta($nomeproduto, $descricao, $foto, $precooriginal, $precovenda, $fornecedor, $validade, $vendidos, $categoria)
{
	$con = mysql_connect('localhost', 'root');
	if(!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
		
	mysql_select_db("tubaraourbano", $con);
	
	
	$sql = "INSERT INTO oferta VALUES('".$nomeproduto."','".$descricao."','".$foto."','".$precooriginal."','".$precovenda."','".$fornecedor."','".$validade."','".$vendidos."','".$categoria."')";
	
	$result = mysql_query($sql);
	
	mysql_close($con);
	return $result;
}


function updateDatabase($table, $key, $THEkey, $property, $value)
{

	$con = mysql_connect('localhost', 'root');
	if(!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
		
	mysql_select_db("tubaraourbano", $con);
	
	$sql = "UPDATE ".$table." SET ".$property."='".$value."' WHERE ".$key."='".$THEkey."'";
	mysql_query($sql);
	
	
	
	mysql_close($con);

}
function getRandomRowDatabaseData($table){
$con = mysql_connect('localhost', 'root');
	if(!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
		
	mysql_select_db("tubaraourbano", $con);
$sql="select * from ".$table." order by rand() limit 1";
$random_row = mysql_fetch_array(mysql_query($sql));
return $random_row;
}

?>