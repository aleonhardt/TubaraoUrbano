
 <?php 
 function getThisOffer($name){
 include 'DatabaseControl.php';
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

?>