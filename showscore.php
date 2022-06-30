<?php

	$conn = mysqli_connect('localhost:3306','root','','pongdb');	
	//$conn = mysqli_connect('localhost','id17901261_rootpong','gxKUAi9n+139h!Rj','id17901261_pongdb');

	//if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
		$query = "CALL showscore();";
		$result = mysqli_query($conn,$query);
		if (!$result){
			die("Sin resultados");
			$arreglo["data"] = []; 

		} else {
			
			while($data = mysqli_fetch_assoc($result)){
				//$arreglo["data"][] = array_map("utf8_encode(data)", $data);
				//recibir 3 columnas $arreglo["data"][][] = $data;
				$arreglo["data"][] = $data;

			}
			echo json_encode($arreglo);

		}
		mysqli_free_result($result);
		mysqli_close($conn);


	//}
	


	
?>