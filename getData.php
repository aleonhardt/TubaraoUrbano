<?php
include 'DatabaseControl.php';
$whatFunction=$_GET['function'];

if($whatFunction=="category"){
 getCategory($_GET['category']);
 }
 
if($whatFunction=="oneOffer"){
	getOffer($_GET['name']);
	}
if($whatFunction=="buyOffer"){
	buyOffer($_GET['name']);
	}
header('Content-Type: text/plain');
exit();
 
function getCategory($category){

$offersFromCategory = getDatabaseData("oferta", "categoria", $category);

if($offersFromCategory!=""){
echo "<ul style=\"POSITION: absolute; WIDTH: 900px; TOP: 300px\" id=\"offers\" name=\"OFFERS\">";
$i=0;
while($i<count($offersFromCategory)){
$row = $offersFromCategory[$i];

 echo "<li>
		<div id=\"ofertalista\">
    <input alt=\"\" src=\"".$row['foto']."\" style=\"width: 100px; height: 100px; float: left;\" type=\"image\" />".$row['nomeproduto']."
    <p>
        ".$row['descricao']."</p>
    <p>
        <strong><span style=\"font-size:24px;\">Somente R$".$row['precovenda']." &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button name=\"visualizar\" onclick=\"showOffer('".$row['nomeproduto']."')\"
		type=\"button\" value=\"Visualizar oferta\" >Visualizar Oferta </button></span></strong></p>
    <p>
        Dispon&iacute;vel at&eacute; ".$row['validade']."</p>
</div>
<br>
<br>
	</li>";
	
$i++;
	}
echo "</ul>";
}
else
	echo "<li><img src=\"images/question_shark.png\"/></li>";

}

function getOffer($name)
{
$alloffer=getDatabaseData("oferta", "nomeproduto", $name);

$offer=$alloffer[0];

echo "<div style=\"POSITION: relative; TOP: 200px\">
<div>
    <h1 style=\"text-align: center;\">
        <cite><span style=\"font-size:40px;\"><span style=\"font-family: trebuchet ms,helvetica,sans-serif;\"><strong>".$offer['nomeproduto']."</span>
		</span></cite></h1>
    <div id=\"preco\" style=\"text-align: center;\">
        <span style=\"font-size:30px;\"><big><strong>De R$".$offer['precooriginal']." por apenas: R$".$offer['precovenda']."</strong></big></span></div>
    <img alt=\"\" src=\"".$offer['foto']."\" style=\"width: 337px; height: 337px; margin-left: 200px; margin-right: 200px;\" /></div>
<h3 style=\"text-align: right;\">
    <span style=\"font-size:16px;\"><span style=\"font-family: trebuchet ms,helvetica,sans-serif;\">Data de t&eacute;rmino da oferta:".$offer['validade']."
	</span></span></h3>
<div>
    &nbsp;</div>
<p style=\"POSITION: relative; TOP: 5px\">
    <img onclick = \"buyOffer('".$offer['nomeproduto']."')\" alt=\"\" src=\"images/comprar.jpg\" style=\"width: 90px; height: 94px; margin-left: 50px; margin-right: 50px;\" /></p>
<div style=\"text-align: center;\">
    &nbsp;</div>
<div id=\"vendidos\">
    <span style=\"font-size:14px;\">Quantidade de ofertas vendidas: ".$offer['vendidos']."</span></div>
	<br>
	<br>
	</div>
	";


}


function buyOffer($name)
{
	$alloffer=getDatabaseData("oferta", "nomeproduto", $name);

	$offer=$alloffer[0];
	$vendidos=$offer['vendidos']+1;
	updateDatabase("oferta", "nomeproduto", $name, "vendidos", $vendidos);
}


?> 