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
	
	echo $result;
	
	
	mysql_close($con);
	
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

?>