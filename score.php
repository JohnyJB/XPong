<!DOCTYPE html>
<html>

  <head> 
  <script type="text/javascript" src="js/libs/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/libs/three/three.js"></script>
	<script type="text/javascript" src="js/libs/three/MTLLoader.js"></script>
	<script type="text/javascript" src="js/libs/three/OBJLoader.js"></script>
  <script type="text/javascript" src="usuario.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos.css">




  <script src="js/bootstrap.min.js"></script>
  <!-- libreria pa tablas-->
  <script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="estilos.css">
	</head>

  <body>
    <h3 id="scoreBoard"></h3>
    <div id="container"></div>
    <script type="text/javascript">

   
$(document).ready(function() 
  {
    //$("#btnlista").click(function() 
    //{
      listar();
    //  document.getElementById('btnlista').style.visibility = 'hidden';
   // });

  
    <?php     //$phpVar1 = $_GET["nombre1"]; ?>

    //player1name = $phpVar1; //=Desconocido
    //player1name = "Desconocido"; //=Desconocido
    init();
    

    
    scenario1();

    render();

    document.addEventListener('keydown', onKeyDown);
    document.addEventListener('keyup', onKeyUp);		


    
    
    

  
  });
 

  //PHP MOSTRAR LISTA ------------------------------------------------------------------------


  var listar = function()
  {
        var table = $("#dt_scores").DataTable
        ({
          "ajax":
          {
            "method":"POST",
            "url":"showscore.php"
          },
          "columns":
          [
            //nombre de las columnas, recibe 2 columnas
            {"data":"playername"},
            {"data":"score"}
          ],
          "order": [[ 1, "desc" ]]
        });

  }
  //-------------------------------------------------------------------------------------------


  </script>

      <!----<button id="btnlista">Lista de Puntos</button>---->

      <table id="dt_scores" class="table table-bordered table-hover" cellspacing="0" width="100%">
        
      <tbody>
          <tr>
              <td></td>
              <td></td>
          </tr>
      </tbody>
      
      </table>
      

  <div style="display: flex; height: 100px;">
    

    <div style="width: 50%;" id ="scene-section"></div>
  
  </div>
    



  </body>



</html>