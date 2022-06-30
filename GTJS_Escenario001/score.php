<!DOCTYPE html>
<html>

  <head> 
  <script type="text/javascript" src="js/libs/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/libs/three/three.js"></script>
	<script type="text/javascript" src="js/libs/three/MTLLoader.js"></script>
	<script type="text/javascript" src="js/libs/three/OBJLoader.js"></script>




  <script src="js/bootstrap.min.js"></script>
  <!-- libreria pa tablas-->
  <script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="score.css">
	</head>

  <body>
    <script type="text/javascript">

   
$(document).ready(function() 
  {
      listar();
  
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


      <table id="dt_scores" class="table " cellspacing="0" width="25%">
      <h1>PUNTUACIONES</h1> 

      <tbody>
          <tr>
              <td></td>
              <td></td>
          </tr>
      </tbody>
      
      </table>
      

  </div>
    



  </body>



</html>