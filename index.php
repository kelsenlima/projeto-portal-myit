<?php @session_start(); ?>
<!DOCTYPE html>
<html lang=”pt-br”>

		<head>
				
        <meta charset="utf-8">
		<meta http-equiv="Content-Language" content="pt-br">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Kelsen Lima, kelsen@flameus.com.br">
		<meta name='copyright' content='Flameus IT'>
		<meta name='url' content='https://www.flameus.com.br'>
		<meta name='robots' content='index,follow'>
        <title>Portal MyIT GAT Logistica</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="code/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="code/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="code/assets/css/form-elements.css">
        <link rel="stylesheet" href="code/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="code/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="code/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="code/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="code/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="code/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Portal MyIT</strong> GAT Logistica</h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Entre no nosso portal</h3>
                            		<p>Digite seu nome de usuário e senha para fazer logon:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
								<form role="form" method="post" action="control.php" class="login-form">
			                  
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="usuario" placeholder="usuário" class="form-username form-control" id="usuario">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="senha">Password</label>
			                        	<input type="password" name="senha" placeholder="senha..." class="form-password form-control" id="senha">
			                        </div>
			                        <button type="submit" class="btn">Entrar!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>Canal de Comunicação:</h3>
                        	<div class="social-login-buttons">
								<a class="btn btn-link-2" href="http://webmail.gatlogistica.com.br" target="_blank">
	                        		<i class="fa fa-windows"></i> Webmail
	                        	</a>
	                        	<a class="btn btn-link-2" href="http://pt-br.facebook.com/gatlogistica/" target="_blank">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="http://www.linkedin.com/company/gat-log%C3%ADstica-transportes" target="_blank">
	                        		<i class="fa fa-linkedin"></i> LinkedIn
	                        	</a>
	                        	<!--<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>-->
								
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="code/assets/js/jquery-1.11.1.min.js"></script>
        <script src="code/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="code/assets/js/jquery.backstretch.min.js"></script>
        <script src="code/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="code/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
<?php exit(); ?>