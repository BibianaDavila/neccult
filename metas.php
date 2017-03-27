<!DOCTYPE html>
<html>
	<head>
		
		<?php include_once("head.php"); ?>
		
		<title><?echo $text['metas'];?> | NECCULT</title>

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
					<div class="col-md-8 col-md-offset-2 col-xs-12 metas-container text-center">

						<div class="separador-vertical"></div>
					
						<div class="metas-text">

							<?php foreach($text['paginaMetas-texto'] as $key => $value):?>
								<p><?php echo $value['paragrafo']; ?></p><br/>
							<?php endforeach;?>

						</div>

						<div class="separador-vertical"></div>

					</div>
				</div>
			</div>
		</div>

		<!-- idioma -->
		<div class="idioma-content">
			<div class="container text-center">
						
				<a href="metas.php?lang=pt" class="button">PT</a>
				<a href="metas.php?lang=es" class="button">ES</a>
				<a href="metas.php?lang=en" class="button">EN</a>

			</div>
		</div>
	</body>
</html>