<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'listaramal', 'G@t#TI@5125', 'listaramal');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'crud_bootstrap');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>