var result;
var maze = [];
var mazeWidth = 20;
var mazeHeight = 20;
var percentage=0.2;

var srow;
var scol;
var trow;
var tcol;
var pp=2;

var b=document.getElementById("createamaze");

b.onclick= givemeamaze; // notice that there is no ()


function isvalidinput()
{
	//validate input before proceed

	var w=document.getElementById("colnum");
        var h=document.getElementById("rownum");
        var p=document.getElementById("percentage");	

	if (w.checkValidity() == false ||h.checkValidity() == false||p.checkValidity() == false)
	{
		document.getElementById("message").innerHTML="w"+w.validationMessage+"h"+h.validationMessage+"p"+p.validationMessage;
		removetable("mymazetableid");
		return false;
	}
	return true;
}

function givemeamaze(){

	if (isvalidinput() == false) return;  
	// there is a minor issue with validate function, commented it out now

	alert('hello Hartwick cisc380'+document.getElementById("colnum").value);
	setupinput(document.getElementById("rownum").value,
        	document.getElementById("colnum").value,
  		document.getElementById("percentage").value);
	
	//setupinput(10, 10, 0.4);
	generate();
	displaystring();
	displaytheboard();
	document.body.style.backgroundColor="lightblue";
}


function setupinput(numofrow, numofcol, ppercentage )
{
	mazeWidth=numofcol;
	mazeHeight=numofrow;
	percentage=ppercentage;

}

function displaystring()
{
	result="data is: ";
	for (var i = 0; i < mazeHeight; i++) {
	        for (var j = 0; j < mazeWidth; j++) {
			result=result+maze[i][j].toString();
        	}
	}	
    	var mymaze = document.getElementById("mymaze");
    	mymaze.innerHTML = result+"outputstring";
	
}


function removetable(id)
    {
        var tbl = document.getElementById(id);
        if(tbl) tbl.parentNode.removeChild(tbl);
    }

function displaytheboard()
{
	removetable("mymazetableid");
	//Create a HTML Table element.
    	var table = document.createElement("TABLE");
	table.setAttribute("id","mymazetableid")
    	table.border = "4";
 
	for (var i = 0; i < mazeHeight; i++) {
        	row = table.insertRow(-1);

	        for (var j = 0; j < mazeWidth; j++) 
		{
       		     	var cell = row.insertCell(-1);
           		cell.innerHTML = maze[i][j];
			//switch(maze[i][j])	
			cell.style.color="#00ffff";
			//cell.style.backgroundColor = "red"; //"#ffff00";
			//cell.style.bgColor = "red"; //"#ffff00";

		}
    	}
 
    	var dvTable = document.getElementById("mymaze");
    	dvTable.appendChild(table);

    	table.onclick = columnHandler;

}

function generate() 
{
for(var i = 0; i < mazeHeight; i ++){
     maze[i] = [];
     for(var j = 0; j < mazeWidth; j ++){
	if (Math.random()<percentage)
		maze[i][j] = 1;
   	else
		maze[i][j] =0;

 }
}
}

var table;

function columnHandler(e) {
    e = e || window.event; //for IE87
    var t = e.target || e.srcElement; //IE87

    while (t.nodeName != 'TD' && t.nodeName != 'TH' && t.nodeName != 'TABLE') {
        t = t.parentNode;
    }
    if (t.nodeName == 'TABLE') {
        return;
    }
    var c = t.parentNode.cells;
	var tr=t.parentNode;
	var r=tr.parentNode.rows;

    var colindex = 0;
    for (var i=0; i<c.length; i++){
        if (c[i] == t) {
            colindex = i;
        }
    }

    var rowindex = 0;
    for (var i=0; i<r.length; i++){
        if (r[i] == tr) {
            rowindex = i;
        }
    }

	srow=rowindex;
	scol=colindex;
	maze[srow][scol]=pp;
	pp++;
	displaytheboard();	
    alert('You clicked on row #'+rowindex+ 'col #'+ colindex + ' , cell content = '+t.innerHTML);
}




// The following code should be ignored, because it seems that DOM doesnot
//support cell level event?? anyway, the above code should be modified ... 
//I purposely still keep them here, 
//because it shows typical way how to navigate through the DOM tree. 
/*

function addColumnHandler(tableid) {
    table = document.getElementById(tableid);
    table.onclick = columnHandler;
}
function addCellHandlers(tableId) {

  
  if(document.getElementById(tableId)!=null){
		var table = document.getElementById(tableId);
		var rows = table.getElementsByTagName('tr');
		    
		for ( var i = 1; i < rows.length; i++) {
			var numcol=rows[i].cells.length;
      alert(numcol.toString());
        
			for ( var j = 0; j < numcol; j++) {
				
        rows[i].cells[j].i=i;
        rows[i].cells[j].j=j;
        	
        //alert(j);
        
        table.rows[this.i].cell[this.j].onclick = function() {
	      alert(what);
        //what = rows[i].cells[j].innerHTML;				
				
        alert(what +i +" "+j);
        
			};
		}
	}
}
}

if (window.addEventListener) {
    window.addEventListener('load', addColumnHandler, false);
} else if (window.attachEvent) {
    window.attachEvent('onload', addColumnHandler);
} 
*/
