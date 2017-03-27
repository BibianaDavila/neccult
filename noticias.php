<!DOCTYPE html>
<html>
	<head>
		
		<?php include_once("head.php"); ?>
		
		<title><?echo $text['noticias'];?> | NECCULT</title>

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

						if(!empty($_GET['page'])){
							$pag = $_GET['page'];
						}else{
							$pag = 1;
						}

						$count = 0;
						$images = Noticia::ImageDirectory();

						foreach(Noticia::news(8,($pag-1)*8) as $news){
						
							if ($count == 0) {
								echo "<div class='new-page opened' id=\"".$pag."\">";
							}
							
								echo "<div class='col-md-3 col-sm-4 col-xs-6'>";
									echo "<a href='noticia.php?id=".$news->id."&titulo=".$news->titulo."' class='clean'/>";
										echo "<div class='news-content'>";

											if(!empty($news->img)){
												echo "<div class=\"news-img\" style=\"background-image:url('".$images.$news->img."')\"></div>";
											}else{
												echo "<div class=\"news-img\" style=\"background-image:url('images/newsDefault.png')\"></div>";
											}

											echo "<div class='news-title'><div class='ellipsis' data-ellipsis='3'>".$news->titulo."</div></div>";
											
											echo "<div class='news-text'><div class='ellipsis' data-ellipsis='1'>".$news->texto."</div></div>";
									
										echo "</div>";
									echo "</a>";
								echo "</div>";

								$count++;

							if ($count == 8) {

								echo "</div>";
							}							
						}

						if($count != 0){
							echo "</div>";
						}

						echo "<div class='row'>";
							echo "<div class='col-xs-12 text-center'>";
								echo "<ul class='pagination news-page'>";
									
									$paginas = ceil(Noticia::newsTotal()/8);

									for ($i=1; $i <= $paginas; $i++) { 

										if ($i == $pag) {
											$act = " class=\"active\">";
										}
										else{
											$act = ">";
										}

										echo "<li".$act."<a href=\"noticias.php?page=".$i."\">".$i."</span></li>";
										
									}

								echo "</ul>";
							echo "</div>";
						echo "</div>";
					?>
				
				</div>
			</div>
		</div>

		<!-- idioma -->
		<div class="idioma-content">
			<div class="container text-center">
					
				<a href="noticias.php?page=<?php echo $pag?>&lang=pt" class="button">PT</a>
				<a href="noticias.php?page=<?php echo $pag?>&lang=es" class="button">ES</a>
				<a href="noticias.php?page=<?php echo $pag?>&lang=en" class="button">EN</a>
				
			</div>
		</div>
	</body>
</html>