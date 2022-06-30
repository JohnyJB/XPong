$(document).ready(function(){

    //  $(".cursoObtenido").click(function(){
    //  	window.location='DentroDelCurso.php';
    //  });
        $("#CrearCurso").click(function(){
          window.location='CrearCurso.php';
      });
        $("#CrearCategoria").click(function(){
        $('#myModal').modal('show');
      });
    
        $("#botonCrearCategoria").click(function(){
        CrearCategoria($('#nam').val(), $('#desc').val());
      });
    
        
    
        function realizaProceso(valorCaja1){
        var numero;
        var uno = 1;
        var parametros = {
                "id_usuario" : valorCaja1
        };
        $.ajax({
                data:  parametros,
                url:   'ProcesoCursosCreados.php',
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
            				$('<div class="col-xs-3" id ="' + response.resultado[i].idCurso + '">' +
            					'<div class="well cursoObtenido">' +
            					'<img class="img-responsive" id="imagenUsuario" src="data:image/png;base64,'+ response.resultado[i].imagenb + '">' +
            					'<p class="TituloCurso">' + response.resultado[i].N + '</p>' +
            					'<p>por ti</p>' +
            					'<p>Calificacion: ' + response.resultado[i].prom_cal + '</p>' +
            					'<p>Progress</p>' +
            					'<div class="progress">' +
            					'<div class="progress-bar" role="progressbar" aria-valuenow="70"' +
            					'aria-valuemin="0" aria-valuemax="100" style="width:70%">' + 
            					'70%' +
            					'</div>' + 
            					'</div>' +
            					'</div>' +
            					'</div>').appendTo("#listaCursosCreados");

                          $("#" + response.resultado[i].idCurso).click(function(){
                          console.log(this.id);
                          sessionStorage.setItem("cursoElegido", this.id);
                          window.location='CrearNivel.php';
                        });
                       }

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }  
        });
      }




    function CrearCategoria(Nombre, Descripcion){

        var parametros = {
                "NombreCategoria" : Nombre,
                "DescripcionCategoria" : Descripcion
        };
        $.ajax({
                data:  parametros,
                url:   'ProcesoCrearCategoria.php',
                type:  'POST',
                dataType: 'JSON',
                beforeSend: function () {
                  console.log(parametros);

                        //$("#resultado").html("Procesando, espere por favor...");
                       // window.location.href = "ModificarPerfil.php";
                },
                success:  function (response) {
                  //ESTO ES LO QUE TENGO QUE USAR
                       //$("#resultado").html(response.numeroResultados);
                       //$("#titulo").html(response.variable);
                       console.log(response);
                       if(response.resultado == "Exito")
                       {
                        alert("Operacion exitosa");
                        $('#myModal').modal('hide');
                       }
                        else if(response.resultado == "FalloBD")
                       {
                        alert("Falla de ejecucion de base de datos")
                       }
                       else
                       {
                        alert("Operacion fallida")
                       }

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }  
        });
      }


      realizaProceso("no");

});