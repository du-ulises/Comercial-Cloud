<?php
function bd_consulta($query)
{
	$hostname="localhost";
	$user="root";
	$password="";
	$bd="compras";
	$connection = mysqli_connect($hostname, $user, $password);
	if($connection == false){
		echo 'Ha habido un error <br>'.mysqli_connect_error(); 	
		exit();
	}
	if (!$connection->set_charset("utf8")) {
		 printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
		 exit();
	} 
	mysqli_select_db ($connection, $bd);
	$result = mysqli_query($connection, $query); 
	mysqli_close($connection);
	return $result;
}
?>