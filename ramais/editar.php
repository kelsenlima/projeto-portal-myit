<?php include("../seguranca.php"); ?>
<?php
	session_start();
	include_once('conexao.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$departamento = $_POST['departamento'];
		$ramalfixo = $_POST['ramalfixo'];
		$localidade = $_POST['localidade'];
		$gruporamal = $_POST['gruporamal'];
		$sql = "UPDATE listaramal SET nome = '$nome', departamento = '$departamento', ramalfixo = '$ramalfixo', localidade = '$localidade', gruporamal = '$gruporamal' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Contato atualizado';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Algum deu errado ao atualizar o contato';
		}
	}
	else{
		$_SESSION['error'] = 'Selecione um contato para ser atualizado';
	}

	header('location: admin.php');

?>