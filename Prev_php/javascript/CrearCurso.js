$(document).ready(function(){


function buscaCategorias(tipo){
	var numero;
	var uno = 1;
        var parametros = {
                "tipo" : tipo
        };
        $.ajax({
                data:  parametros,
                url:   'ProcesoEncontrarCategorias.php',
                type:  'POST',
                dataType: 'JSON',
                beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");
                       // window.location.href = "ModificarPerfil.php";
                },
                success:  function (response) {
                	//ESTO ES LO QUE TENGO QUE USAR
                       //$("#resultado").html(response.numeroResultados);
                       //$("#titulo").html(response.variable);
                       console.log(response);
                       for (var i = 0; i < response.numeroResultados; i++) {
                       	//numero = "resultado";
                       //	$("#resultaos").append(response.resultado[i].nombre);

            				//$("<div>This is another added div</div>").appendTo("body");
            				$('<option value= "' + response.resultado[i].ID_cat + '" title="' + response.resultado[i].descripcion + '">' 
            				 + response.resultado[i].nombre + '</option>').appendTo("#Categoria");
                       }

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }  
        });
      }


buscaCategorias("no");

      
});