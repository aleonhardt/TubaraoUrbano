<?php
include 'DatabaseControl.php';
$whatFunction=$_GET['function'];

if($whatFunction=="category"){
 getCategory($_GET['category']);
 }
 
if($whatFunction=="oneOffer"){
	getOffer($_GET['name']);
	}
header('Content-Type: text/plain');
exit();
 
function getCategory($category){

$offersFromCategory = getDatabaseData("oferta", "categoria", $category);

if($offersFromCategory!=""){
$i=0;
while($i<count($offersFromCategory)){
$row = $offersFromCategory[$i];

 echo "<li><img onclick=\"showOffer('".$row['nomeproduto']."')\" src=\"".$row['foto']."\"/></li>";
$i++;
}
}
else
	echo "<li><img  src=\"images/question_shark.png\"/></li>";

}

function getOffer($name)
{
$offer=getDatabaseData("oferta", "nomeoferta", $name);

//how to show the offer?

}


?> 