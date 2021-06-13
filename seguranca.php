<?php
@session_start();
if($_SESSION["autentica"] != "SIP"){
    header("Location: http://myit.grupogat.com.br/");
    exit();
}
?>