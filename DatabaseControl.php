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


?>