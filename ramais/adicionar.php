<?php include("../seguranca.php"); ?>
<?php
	session_start();
	include_once('conexao.php');

	if(isset($_POST['add'])){
		$nome = $_POST['nome'];
		$departamento = $_POST['departamento'];
		$ramalfixo = $_POST['ramalfixo'];
		$localidade = $_POST['localidade'];
		$gruporamal = $_POST['gruporamal'];
		$sql = "INSERT INTO listaramal (nome, departamento, ramalfixo, localidade, gruporamal) VALUES ('$nome', '$departamento', '$ramalfixo', '$localidade', '$gruporamal')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Contato adicionado';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Algo deu errado ao adicionar';
		}
	}
	else{
		$_SESSION['error'] = 'Preencha primeiro o formulario';
	}

	header('location: admin.php');
?>