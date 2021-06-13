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

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
        <!-- <meta charset="utf-8" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>MyIT - Controle de Acesso Portaria Final de Semana</title>   

<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../code/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../code/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../code/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../code/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../code/assets/ico/apple-touch-icon-57-precomposed.png">
     
    </head>
    <!-- Bloqueio contra copia -->
	<body expr:class="&quot;loading&quot; + data:blog.mobileClass" oncontextmenu="return false" ondragstart="return false" onselectstart="return false" onkeydown="return false">

<?php
 // Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>DATA DE ENTRADA</th>";
 echo "<th>EMPRESA</th>";
 echo "<th>OUTRA EMPRESA</th>";
 echo "<th>HORARIO DE CHEGADA</th>";
 echo "<th>HORARIO DE SAIDA</th>";
 echo "<th>MOTIVO DE ACESSO</th>";
 echo "<th>SETOR DE ACESSO</th>";
 echo "</tr>";
 // Conectando ao banco de dados:
$strcon = mysqli_connect('localhost','portaria','kdsl323','portaria2');
 if (!$strcon) {
   die('Não foi possível conectar ao MySQL');
 }
 $sql = "SELECT * FROM cadastro_final";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $nome_completo = $registro['nome_completo'];
    $data_entrada = $registro['data_entrada'];
    $empresa = $registro['empresa'];
	$empresa_outra = $registro['empresa_outra'];
	$hora_chegada = $registro['hora_chegada'];
	$hora_saida = $registro['hora_saida'];
	$motivo_acesso = $registro['motivo_acesso'];
	$setor_acesso = $registro['setor_acesso'];
    echo "<tr>";
    echo "<td>".$nome_completo."</td>";
    echo "<td>".$data_entrada."</td>";
    echo "<td>".$empresa."</td>";
	echo "<td>".$empresa_outra."</td>";
	echo "<td>".$hora_chegada."</td>";
	echo "<td>".$hora_saida."</td>";
	echo "<td>".$motivo_acesso."</td>";
	echo "<td>".$setor_acesso."</td>";
    echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
 ?>
 </body>
</html>