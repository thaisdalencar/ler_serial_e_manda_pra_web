
function mostrar_dados(valores, contador){
	$("#valor").html(contador+"</br>");
	$("#teste").html(valores+"</br>");
}

$(document).ready(function(){
	var cont = 0;
	console.log("iniciou");
	setInterval(function(){
	  	$.ajax({
	        type: "GET",
	        url: "php_exec_e_ler.php",
	        success: function (data){
	        	console.log("contador="+cont); 
	        	console.log(data); 
      			mostrar_dados(data, cont);  
      			cont = cont + 1;      	
			},
			dataType: "json"
	    });
	}, 2000);	
});
