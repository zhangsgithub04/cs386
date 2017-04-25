screenshot = function(){	
		xOffset = 100;
		yOffset = 50;
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result
	$("a.screenshot").hover(function(e){
		$("body").append("<p id='screenshot'><img src='"+ this.rel +"' />"+ "</p>");								 
		$("#screenshot")
			.css("top",(e.pageY + yOffset) + "px")
			.css("left",(e.pageX + xOffset) + "px")
			.fadeIn("slow");						
    },
	function(){
		$("#screenshot").remove();
    });	

	$("a.screenshot").mousemove(function(e){
		$("#screenshot")
			.css("top",(e.pageY + yOffset) + "px")
			.css("left",(e.pageX + xOffset) + "px");
	});			
};


screenshot2 = function(){	
/*this is for dynamically generated elements*/
		x = 300;
		y = 300;
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result


	$("ol").on("mouseenter", "li a.ss", function(e){
		$("body").append("<p id='sss'><img src='"+ this.rel +"' />"+ "</p>");								 
		$("#sss")
			.css("top",(  y) + "px")
			.css("left",( x) + "px")
			.fadeIn("slow");						
    }
);	
	
	$("ol").on("mouseleave", "li a.ss", function(e){
		$("#sss").remove();
    }
);
	$("ol").on("mouseover", "li a.ss", function(e) {
		$("#sss")
			.css("top",(e.pageY + y) + "px")
			.css("left",(e.pageX + x) + "px");
});

};

function generatelist()
{
    $("button").click(function(){
        $.getJSON("presidents.json", function(result){
	var ps=result.presidents;
	var items="";
	for(var i=0, len=ps.length;i<len;i++)
	{
	 items+=" <li><a class='ss' rel='"+ps[i].imagename+"'>"+ps[i].name+"</a></li>";
      	}
      	$('ol').html(items);
	});
});
	screenshot2();
}

// starting the script on page load
//$(document).ready(function(){
$(function(){
	screenshot();
	generatelist();
});




