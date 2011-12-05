<?php
function getDatabaseData($table, $key, $THEkey)
{

$con = mysql_connect('localhost', 'tubarao', 'whatISTHIS');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ajax_demo", $con);

$sql="SELECT * FROM".$table."WHERE".$key." = '".$THEkey."'";

$result = mysql_query($sql);

 while ($aRow = mysql_fetch_array($pResult)) {
        $aResult[]= $aRow;
    }
 return $aResult; 

}


?>