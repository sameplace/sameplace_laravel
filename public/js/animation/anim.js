// var Animate = function(id, height, animation){

// 	var element = document.getElementById(id);

// 	window.onscroll = function(){

// 		var imagePos = element.offsetTop;
// 		var topOfWindow = window.scrollY; 

// 		if(imagePos < topOfWindow+height) {
// 			element.className = element.className + " " + animation;
// 		}
// 	}
// }

var AnimateOnMouseOver = function(over, id, animation){	

	var element = document.getElementById(over);
	var bouncy = document.getElementById(id);

	element.onmouseover=function(){
		bouncy.className = bouncy.className + " " + animation;
	};
}

var CallAjax = function(parameter, file){
	this.parameter = parameter;
	this.file = file;
	
	var xmlhttp;
	xmlhttp=new XMLHttpRequest();
	var pars = "parameter=" + parameter;
	xmlhttp.open("post", file, true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length",pars.length);
	xmlhttp.setRequestHeader("Connection","close");
	xmlhttp.send(pars);
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4)
		{
			var json = xmlhttp.responseText;
    		var test = document.getElementById('message');
    		test.innerHTML = test.innerHTML + json;
		}
	}
}

var AjaxOnClick = function(parameter, file, htmlObject){
	this.paremeter = parameter;
	this.file = file;
	this.htmlObject = htmlObject;

	htmlObject.onclick = function(){
		CallAjax(parameter, file);
	}
}