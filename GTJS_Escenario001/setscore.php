<?php

	//$conn = mysqli_connect('localhost:3307','root','root','pongdb');	
	$conn = mysqli_connect('localhost','id17901261_rootpong','gxKUAi9n+139h!Rj','id17901261_pongdb');

	if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password'])){

	$nombre = $_POST['usuario'];
   	$puntuacion = $_POST['password'];
	   
	$query = "CALL addscore('$nombre','$puntuacion');";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)>0){
		echo json_encode(array('success'=> 1));
	}else{
	  echo json_encode(array('success'=> 0));
	}
	$conn->close();
	}

	
?>