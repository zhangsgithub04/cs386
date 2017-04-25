var b=document.getElementById('testxmlparser'); 
b.onclick=test;
//alert('asdfas');

var b=document.getElementById('loadxml'); 
b.onclick=loadxmlfromserver;

//this is related ajax
function loadxmlfromserver()
{
 // generate a HTTP request internally 
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "mynn.xml", true);
  xhttp.send();
}

function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  numoflayerscollection=xmlDoc.getElementsByTagName("numoflayers");
  numoflayer=numoflayerscollection[0].childNodes[0].nodeValue;
  document.getElementById("nol").innerHTML = numoflayer;
}


function test() {
var  hardcodedxml="<city><street>Maple</street><street>main street</street></city>";
//alert('asasas');
parser = new DOMParser();
xmlDoc=parser.parseFromString(hardcodedxml, "text/xml");

streetcollection=xmlDoc.getElementsByTagName("street");

//streetname=streetcollection[0].childNodes[0].nodeValue;
//alert(streetname);

var content="";
for(i=0;i<streetcollection.length;i++)
	content=content+", "+streetcollection[i].childNodes[0].nodeValue;

//alert(content);

document.getElementById("nol").innerHTML=content;
}


//document.getElementById("nnname").innerHTML=


