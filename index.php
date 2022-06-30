

<!DOCTYPE html>
<html>
<head>
    <title>Pong Fest</title>
    <!-- <script type="text/javascript" src="jquery-3.3.1.js"></script> -->
    <!-- <script type="text/javascript" src="usuario.js"></script> -->
    <script type="text/javascript" src="js/libs/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/libs/three/three.js"></script>
	<script type="text/javascript" src="js/libs/three/MTLLoader.js"></script>
	<script type="text/javascript" src="js/libs/three/OBJLoader.js"></script>
    <script type="text/javascript" src="usuario4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- libreria pa tablas-->
    <script src="js/jquery.dataTables.min.js"></script>
	<!-- <script src="js/dataTables.bootstrap.js"></script> -->
    <!-- <link rel="stylesheet"  href="GTS_Escenario001/index.php"> -->




    


    <script>

        var solo = false;
        var multis = false;
        var inicio;

        function Inicio(inicioDiv){
            //almacena las etiquetas
            var frames = [];
            //almacena los nombres
            var framesnames = [];

            for (var i = 0; i < inicioDiv.childNodes.length; i++)
            {
                var id = inicioDiv.childNodes[i].id;

                if (id != undefined) { 
                    var child = inicioDiv.childNodes[i]; 

                    if (child.classList.contains("frame")) { frames[id] = child;
                          framesnames.push(id);
                    }

                }
            }

             function setFrameVisible(name)
             {
                frames[name].classList.remove("oculto");
                frames[name].classList.add("visible");
            }

            function setFrameHidden(name)
             {
                frames[name].classList.remove("visible");
              frames[name].classList.add("oculto");
            }
            //para poder acceder a las 2 funciones privadas se usa esto:
             return {
                       "setFrameVisible": setFrameVisible,
                        "setFrameHidden": setFrameHidden
                  };
        }

    window.addEventListener("load", function ()
    {
      inicio = new Inicio(document.getElementById("inicio"));
    });

    $(document).ready(function() {
    $("#btnPuntoss").click(function() {
        location.href = "GTJS_Escenario001/score.php";
      //document.getElementById('btnlista').style.visibility = 'hidden';
    });
    		
  });

    var listar = function(){
        var table = $("#dt_scores").DataTable({
          "ajax":{
            "method":"POST",
            "url":"showscore.php"
          },
          "columns":[
            //nombre de las columnas, recibe 2 columnas
            {"data":"playername"},
            {"data":"score"}
          ],
          "order": [[ 1, "desc" ]]
        });

    }


     </script>


    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>

        <div id = "fb-root" > </div> 
        <script async defer crossorigin = "anonymous" src = "https://connect.facebook.net/es_MX/sdk.js#xfbml=1&version=v3.3&appId= 552601678569608 & autoLogAppEvents = 1 " > 
        </script> 

         <script>

            


                $(document).ready(function(){

                    $('#escenario1').click(function()
                    {
                        //storage.setItem('nombre2', $('#nombre1').val());
                        //$('#nombre1').val()
                        //location.href = "GTJS_Escenario001/index.html";
                        if($('#nombre1').val() != '')
                        {
                            //location.href = "GTJS_Escenario001/index.html";
                        //$("#rp").removeAttr("disabled"); 
                        }
                    });

                    $('#escenario2').click(function(){

                        //storage.setItem('nombre2', $('#nombre1').val());
                        //$('#nombre1').val()

                        //location.href = "GTJS_Escenario002/index.html";
                        if($('#nombre').val() != ''){
                        $("#rp").removeAttr("disabled"); 
                        }
                    });

                    $('#escenario3').click(function(){
                        //location.href = "GTJS_Escenario003/index.html";
                        if($('#nombre').val() != ''){
                            
                        $("#rp").removeAttr("disabled"); 
                        }
                    });

                    $('#multijugador').click(function(){
                        location.href = "GTJS_Multiplayer/index.html";

                        //$("#rp").attr("disabled","true");
                    });

                    
                });
        </script> 

     <div id="inicio">

        

        <!--Menu principal-->
         <div id="principal"  class="frame visible">
            <h1></h1>
            <button onclick="inicio.setFrameVisible('juego');inicio.setFrameHidden('principal');">Jugar</button><br>
            <button id="btnPuntos" onclick="inicio.setFrameVisible('puntuaciones');inicio.setFrameHidden('principal');">Puntuaciones</button><br>
            <button onclick="inicio.setFrameVisible('opciones');inicio.setFrameHidden('principal');">Opciones</button>

            <br>
            <div class="fb-share-button" data-href="https://festpong.000webhostapp.com/" data-layout="button" data-size="large">
            <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://festpong.000webhostapp.com/" class="fb-xfbml-parse-ignore"></a></div>



         </div>


          <!--Menú de juego-->
         <div id="juego" class="frame oculto">

            <h1></h1>

            <button onclick="inicio.setFrameVisible('putname');inicio.setFrameHidden('juego'); " >1 Jugador</button><br>

            <button id="multijugador" onclick="inicio.setFrameVisible('oneplayer');inicio.setFrameHidden('juego'); " >Multijugador</button><br>

            <button onclick="inicio.setFrameVisible('principal');inicio.setFrameHidden('juego');">Regresar</button><br>
         </div>

         <!--Nombre de jugador-->
         <div id="putname" class="frame oculto" >

            <h1></h1>
            <input id="nombre1" type="text"  placeholder="Nombre/Apodo..."> 
            <br>

            <button id="escenario1" onclick="if($('#nombre1').val() != ''){inicio.setFrameVisible('oneplayer');inicio.setFrameHidden('putname');} " >VUELO UFO</button><br>

            <button id="escenario2" onclick="if($('#nombre1').val() != ''){inicio.setFrameVisible('oneplayer');inicio.setFrameHidden('putname');} " >CALACAS CHIDAS</button><br>
            
            <button id="escenario3" onclick="if($('#nombre1').val() != ''){inicio.setFrameVisible('oneplayer');inicio.setFrameHidden('putname');} " >TORNADO</button><br>
            
            <br>
            <br>
            <button onclick="inicio.setFrameVisible('juego');inicio.setFrameHidden('putname');">Regresar</button>

         </div>




         <!--1 ó 2 jugador(es)-->
         <div id="oneplayer" class="frame oculto" style="align-content:center ;" >

         <!--<script type="text/javascript" src="GTJS_Escenario001/index.php"></script>-->

        
            <div id="playerone" style="position:center ;"> </div> <!--canvas--> 
        
            <br>
            <button onclick="inicio.setFrameVisible('principal');inicio.setFrameHidden('oneplayer');">Volver al menú</button> 

         </div>





        
         <!--Puntuaciones-->
         <div id="puntuaciones" class="frame oculto" >
            <h1>Puntuaciones</h1> 

            <table id="dt_scores" class="table table-bordered table-hover" cellspacing="0" width="100%">
        
        <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        
        </table>

            <br><br><br><br><br>
            <button onclick="inicio.setFrameVisible('principal');inicio.setFrameHidden('puntuaciones');">Ver Puntuaciones</button>
         </div>

         <!--Opciones-->
         <div id="opciones" class="frame oculto">
            <h1>Opciones</h1>
	
            <p>Dificultad:
                <select name="dificultad" class="selector">
                    <option >Fácil</option>
                    <option>Difícil</option>
                </select>

            </p>


            <p>Música:
                <select name="musica" class="selector">
                    <option >SI</option>
                    <option>NO</option>
                </select>
                </p>


            <br><br><br><br>
            <button onclick="inicio.setFrameVisible('controles');inicio.setFrameHidden('opciones');" >Controles</button>
            
            <br><br>
            <button onclick="inicio.setFrameVisible('principal');inicio.setFrameHidden('opciones');">Regresar</button>
         </div>


          <!--Controles-->
         <div id="controles" class="frame oculto">
            <h1>Controles</h1>

            <p>  
                    <h2>--------
                    <h2>----
   
                      
                    
            </p>

            <p>  
                        <h2>Jugador:                    
   
                    MOVER  <input type="image" src="imagenes/jcontrol2.jpg"  height="45px">  
                    
            </p>
            
            


                    

            <button onclick="inicio.setFrameVisible('opciones');inicio.setFrameHidden('controles');">Regresar</button>
         </div>

    </div>

</body>
</html>