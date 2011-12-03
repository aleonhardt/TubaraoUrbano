
 var offerLists = new Array(4);
 offerLists["Procure outras ofertas"] = ["images/question_shark.png"]; 
 offerLists["Gastronomia"] = ["images/gastronomia0.png", "images/gastronomia1.png"]; 
 offerLists["Turismo"] = ["images/turismo0.png", "images/turismo1.png"]; 
 offerLists["Moda"] = ["images/moda0.png"]; 
 offerLists["Estética"]= ["images/estetica0.png", "images/estetica1.png"]; 
 offerLists["Entretenimento"]= ["images/entretenimento0.png", "images/entretenimento1.png", "images/entretenimento2.png"]; 


function searchOffers(selectObj)
{
	// get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
var which = selectObj.options[idx].value; 
ofList=offerLists[which];
 o=window.open("search.html");
//document.URL="search.html";
 showOfferList(ofList);
}

function showOfferList(ofList)
{
o.onload=function(){
 var i=0;


 for(i=0; i< (ofList.length); i++)
 {
  		addElement(ofList[i]);
 }
 }
}

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


