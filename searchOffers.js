
function searchOffers(selectObj)
{
	var str = selectObj.options[selectObj.selectedIndex].value;
	// get the index of the selected option 
	if(str==""){}
	//do something
else{
 o=window.open("search.html");
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

 var list = o.document.getElementById('offers');
  list.innerHTML=databaseReturn;
  	
}

function showOfferData(databaseReturn)
{
	var offerData = document.getElementById('offerdata');
  offerData.innerHTML=databaseReturn;
}

function showOffer(offerName)
{
 alert(offerName);
window.open("offer.html", "_self");
window.onload= function()
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
}


