
function searchOffers(str)
{
	// get the index of the selected option 
	if(str=="")
	//do something
else{
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
	 o=window.open("search.html");
   	showOfferList(xmlhttp.responseText);
    }
  }
xmlhttp.open("GET","getData.php?function="+category+"&category="+str,true);
xmlhttp.send();
 
 }
}

function showOfferList(databaseReturn)
{
o.document.getElementById('offers').innerHTLM=databaseReturn;
//put the html the php returned somewhere
}

function showOffer(offerName)
{
 //??
}
/*
function addElement(url)
{
 var list= o.document.getElementById('offers');
 var newItem = document.createElement('li');
 var img = document.createElement('img');
 img.setAttribute('src', url);
 newItem.appendChild(img);

 list.appendChild(newItem);
 if(url=="images/question_shark.png")
 {  		 
			addSelector();
			}
}


function addSelector()
{

 var list= o.document.getElementById('offers');

 var newItem = document.createElement('li');
 var selector = document.createElement('select');
selector.setAttribute('id', "selector");
 var option = document.createElement('option');
 option.text='Gastronomia';
 selector.appendChild(option);

   var option2 = document.createElement('option');
 option2.text='Entretenimento';
  selector.appendChild(option2);

   var option3 = document.createElement('option');
  option3.text='Turismo';
   selector.appendChild(option3);
    var option4 = document.createElement('option');
   option4.text='Moda';
    selector.appendChild(option4);

	 var option5 = document.createElement('option');
	 	option5.text='Estética';
	 selector.appendChild(option5);
	 
	   list.appendChild(selector);
	   selector.addEventListener("change", function () { searchOffers (this)},false);
	
}	
*/

