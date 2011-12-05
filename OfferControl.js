
function searchOffers(selectObj)
{
	var str = selectObj.options[selectObj.selectedIndex].value;
	// get the index of the selected option 
	if(str==""){}
	//do something
else{
 o=window.open("offer.html");
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		o.onload=function(){
			showOfferList(xmlhttp.responseText);
		}
    }
  }
xmlhttp.open("GET","getData.php?function=category&category="+str,true);
xmlhttp.send();

 
 }
}

function showOfferList(databaseReturn)
{

	var tit = o.document.getElementById("titulo");
	tit.innerHTML="Ofertas da categoria pesquisada";
 var list = o.document.getElementById("offerdata");
  list.innerHTML=databaseReturn;
  	
}

function showOfferData(databaseReturn)
{
	
	var tit = document.getElementById("titulo");
	tit.innerHTML="Oferta";
	var offerData = document.getElementById("offerdata");
  offerData.innerHTML=databaseReturn;
}

function showOffer(offerName)
{
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		
		showOfferData(xmlhttp.responseText);
    }
  }
  xmlhttp.open("GET","getData.php?function=oneOffer&name="+offerName,true);
	xmlhttp.send();
  
}

function buyOffer(offerName){
	alert("thanks for buying");
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		window.close();
    }
  }
  
  xmlhttp.open("GET","getData.php?function=buyOffer&name="+offerName,true);
	xmlhttp.send();
}



