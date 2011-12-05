<?php
include 'DatabaseControl.php';

$whatFunction=$_GET["function"];

if($whatFunction="category");
 getCategory($_GET["category"]);
 
if($whatFunction="oneOffer");
	getOffer($_GET["name"]);

 
function getCategory($category){

$offersFromCategory = getDatabaseData("oferta", "categoria", $category);


$i=0;
while($row = $offersFromCategory[$i])
  {
  $i++;

 echo "<li><img onclick=\"showOffer(".$row['nome'].")\" src=\"".$row['file']."\"/></li>"
  }


}

function getOffer($name)
{
$offer=getDatabaseData("oferta", "nome", $name);

//how to show the offer?

}
?> 