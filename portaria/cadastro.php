<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
		
		<!-- Bloquear botão direito do mouse: -->

		<script>      
		function click() {       
		if (event.button==2||event.button==3) {       
		oncontextmenu=&#39;return false&#39;;       
		}       
		}       
		document.onmousedown=click       
		document.oncontextmenu = new Function(&quot;return false;&quot;)       
		</script>

		<!-- Bloquear seleção de texto: -->

		<script language='JavaScript'>
		function bloquear(e){return false}
		function desbloquear(){return true}
		document.onselectstart=new Function (&quot;return false&quot;)
		if (window.sidebar){document.onmousedown=bloquear
		document.onclick=desbloquear}
		</script>

		<!-- Bloquear tecla Ctrl+C/Ctrl+V: -->

		<script language='JavaScript'>
		function checartecla (evt)
		{if (evt.keyCode == &#39;17&#39;)
		{alert(&quot;Comando Desativado&quot;)
		return false}
		return true}
		</script>

		<!-- Bloquear arrastar e soltar: -->

		<script language='javascript'>
		function validateKey (evt)
		{if (evt.keyCode == &#39;17&#39;)
		{alert(&quot;Comando Desativado&quot;)
		return false}
		return true}
		</script>		
		
	    <meta charset="utf-8">
		<meta http-equiv="Content-Language" content="pt-br">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Kelsen Lima, kelsen@flameus.com.br">
		<meta name='copyright' content='Flameus IT'>
		<meta name='url' content='https://www.flameus.com.br'>
		<meta name='robots' content='index,follow'>
		<title>Controle de Acesso Portaria Final de Semana</title> 
		<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <!--<meta charset="utf-8" /> -->
		
		<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../code/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../code/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../code/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../code/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../code/assets/ico/apple-touch-icon-57-precomposed.png">
		
    </head>
    <!-- Bloqueio contra copia -->
	<body expr:class="&quot;loading&quot; + data:blog.mobileClass" oncontextmenu="return false" ondragstart="return false" onselectstart="return false" onkeydown="return false">

<body>
<?php
 $nome_completo = $_POST['nome_completo'];
 $data_entrada = $_POST['data_entrada'];
 $empresa = $_POST['empresa'];
 $empresa_outra = $_POST['empresa_outra'];
 $hora_chegada = $_POST['hora_chegada'];
 $hora_saida = $_POST['hora_saida'];
 $motivo_acesso = $_POST['motivo_acesso'];
 $setor_acesso= $_POST['setor_acesso'];
 $strcon = mysqli_connect('localhost','portaria','kdsl323','portaria2');
 if (!$strcon) {
   die('Não foi possível conectar ao MySQL');
 }
 // Criando a declaração SQL:
 $sql = "INSERT INTO cadastro_final(nome_completo, data_entrada, empresa, empresa_outra, hora_chegada, hora_saida, motivo_acesso, setor_acesso)
 VALUES ('$nome_completo','$data_entrada','$empresa','$empresa_outra','$hora_chegada','$hora_saida','$motivo_acesso','$setor_acesso')";
 // Executando a declaração no banco de dados:
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
 echo "Registro inserido com sucesso";
 mysqli_close($strcon);
 echo "<br><br><a href='index.html'>Clique aqui para voltar</a>";
?>
</body>
</html>