<?php 
        require("ldap.php"); 
        header("Content-Type: text/html; charset=utf-8"); 
        $usr = $_POST["usuario"]; 
        $usuario = mailboxpowerloginrd($usr,$_POST["senha"]); 
        if($usuario == "0" || $usuario == ''){ 
            $_SERVER = array(); 
            $_SESSION = array(); 
            echo"<script> alert('Usuário ou senha inválidos. Por favor verifique.'); window.location.href='index.php'; </script>"; 
        }else{ 
            session_start(); 
            $_SESSION["user"] = $usuario; 
            $_SESSION["autentica"] = "SIP"; 
            echo"<script>window.location.href='home.php'; </script>"; 
        } 
?>