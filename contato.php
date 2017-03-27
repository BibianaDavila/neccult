<!DOCTYPE html>
<html>
	<head>
		
		<?php include_once("head.php"); ?>
		
		<title><?echo $text['contato'];?> | NECCULT</title>

	</head>	
	<body>

		<!--=== header ===-->
		<?php
			include_once("header.php");
		?>
		
		<!--=== conteúdo ===-->
		<div class="content">
			<div class="container">
				<div class="row">

					<!-- image -->
					<div class="col-sm-6 col-xs-12">
						<div class="contact-img shadow-img"></div>
					</div>
					<div class="col-sm-6 col-xs-12 contact-container">
						<div class="contact-content">

							UFRGS | Faculdade de Ciências Econômicas, Anexo - Campus Centro 
							<br/>
							Av. João Pessoa, 52 - Porto Alegre - RS, Brasil 
							<br/>
							Telefone: +55 51 3308-4718

						</div>
					</div>
				</div>

				<!-- Links para as redes sociais -->
				<div class="row">
					<div class="col-md-12 text-center">

						<div class="social-links"> 
							<a href=""><img src="images/icons/facebook.png"></a>	
							<a href=""><img src="images/icons/twitter.png"></a>	
							<a href=""><img src="images/icons/instagram.png"></a>	
						</div>

					</div>
				</div>

			</div>
		</div>

		<!-- idioma -->
		<div class="idioma-content">
			<div class="container text-center">
						
				<a href="contato.php?lang=pt" class="button">PT</a>
				<a href="contato.php?lang=es" class="button">ES</a>
				<a href="contato.php?lang=en" class="button">EN</a>

			</div>
		</div>
	</body>
</html>