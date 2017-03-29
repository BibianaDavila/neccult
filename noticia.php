<!DOCTYPE html>
<html>
	<head>
		
		<?php include_once("head.php"); ?>
		
		<title><?php echo $_GET['titulo']?> | NECCULT</title>
		
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

					<?php

						$images = Noticia::ImageDirectory();
						$news = Noticia::find($_GET['id']);

						if(empty($news)){
							header("Location: noticias.php");
						}else{

							if($news->img!=''){
								echo "<div class='col-md-6 text-center'>";
									echo "<img src='".$images.$news->img."' class='shadow-img fluid-img'/>"; 
								echo "</div>";

								echo "<div class='col-md-6 text-center'>";
						
							}else{
								
								echo "<div class='col-md-10 col-md-offset-1 text-center'>";

							}
						}
					?>

						<div class="newsPage-text">

							<div class="date"><?php echo $news->data; ?></div>
														
							<div class="title"><?php echo $news->titulo; ?></div>

							<br/>

							<?php echo $news->texto; ?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!--=== footer ===-->
		<footer>

			<!-- idioma -->
			<div class="idioma-content">
				<div class="container text-center">
						
					<p>
						<a href="noticia.php?id=<?php echo $news->id?>&titulo=<?php echo $news->titulo?>&lang=pt" class="button">PT</a>
						<a href="noticia.php?id=<?php echo $news->id?>&titulo=<?php echo $news->titulo?>&lang=es" class="button">ES</a>
						<a href="noticia.php?id=<?php echo $news->id?>&titulo=<?php echo $news->titulo?>&lang=en" class="button">EN</a>
					</p>

				</div>
			</div>

		</footer>
	</body>
</html>