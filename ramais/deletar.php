<?php include("../seguranca.php"); ?>
<?php
	session_start();
	include_once('conexao.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM listaramal WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Contato deletado';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Algum deu errado ao deletar o contato';
		}
	}
	else{
		$_SESSION['error'] = 'Selecione um contato para ser deletado';
	}

	header('location: admin.php');
?>