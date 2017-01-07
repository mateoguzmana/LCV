function LoadPage(url){

	$.get("templates/"+url, function(R){

		$("#page-wrapper").hide();
		$("#page-wrapper").html(R);
		$("#page-wrapper").fadeIn(500);
	});

};



$(document).ready(function(){

	var url = window.location.href;
	var url = url.split("/");
	var url = url[5];

	if(url==""){
	LoadPage("index.php");
	}else{
	var url = url.replace("#","");
	var url = url+".php";
	LoadPage(url);
	}

});




