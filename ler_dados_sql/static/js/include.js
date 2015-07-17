$(document).ready(function(){
	var cont = 0;
	console.log("iniciou include");
	setInterval(function(){
	  	$.ajax({
	        type: "GET",
	        url: "../ler_json_com_php.php",
	        success: function (data){
	        	console.log(data); 
      			cont = cont + 1;      	
			},
			dataType: "json"
	    });
	}, 2000);	
});