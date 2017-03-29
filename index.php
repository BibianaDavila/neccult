<!DOCTYPE html>
<html>
	<head>
		
		<?php include_once("head.php"); ?>
		
		<title>NECCULT</title>

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
					<div class="col-md-12">

						<!--=== carousel noticias ===-->
						<div id="newsCarousel" class="custom-carousel carousel slide" data-ride="carousel">

							<!-- indicators -->
							<ol class="carousel-indicators">
								<li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#newsCarousel" data-slide-to="1"></li>
								<li data-target="#newsCarousel" data-slide-to="2"></li>
								<li data-target="#newsCarousel" data-slide-to="3"></li>
								<li data-target="#newsCarousel" data-slide-to="4"></li>
							</ol>

							<!-- wrapper for slides -->
							<div class="carousel-inner" role="listbox">
	    						
	    						<?php

	    							$count = 0;
	    							$images = Noticia::ImageDirectory();
	    							
									foreach(Noticia::news(5,0) as $news){

										if ($count == 0){
											echo "<div class='item active'>";
										}else{
											echo "<div class='item'>";
										}

										echo "<a href='noticia.php?id=".$news->id."&titulo=".$news->titulo."' class='clean'/>";
											echo "<div class='carousel-inner-item'>";

												echo "<div class='carousel-bg'>";
													echo "<div class='row'>";

													   echo "<div class='col-md-7 col-sm-6 col-xs-12'>";

														    echo "<div class='carousel-wrapper-img'>";

														    if(!empty($news->img)){
																echo "<div class='carousel-img shadow-img' style=\"background-image:url('".$images.$news->img."')\"></div>";
															
															}else{
																echo "<div class='carousel-img shadow-img' style=\"background-image:url('images/newsDefault.png')\"></div>";			
															}

														    echo "</div>";

													    echo "</div>";
													    	
													    echo "<div class='col-md-5 col-sm-6 col-xs-12'>";
										
															echo "<div class='carousel-title'><div class='inner ellipsis' data-ellipsis='3'>".$news->titulo."</div><div class='separador hidden-xs'></div></div>";
				    										
				    										echo "<div class='carousel-text hidden-xs'><div class='ellipsis' data-ellipsis='3'>".$news->texto."</div>...</div>";

				    										echo "<div class='carousel-data'>".$news->data."</div>";

				    									echo "</div>";

			    									echo "</div>";
				    							echo "</div>";
				    						echo "</a>";

			    						echo "</div></div>";

			    						$count++;

			    						if ($count == 5){

											break;
										}
									}
								?>
								
							</div>

							<!-- left and right controls -->
							<a class="left carousel-control" href="#newsCarousel" role="button" data-slide="prev">
								<img src="images/icons/left.png" class="arrow-icon"/>
	 						</a>

	  						<a class="right carousel-control" href="#newsCarousel" role="button" data-slide="next">
								<img src="images/icons/right.png" class="arrow-icon"/>
	  						</a>

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--=== footer ===-->
		<?php
			include_once("footer.php");
		?>

		<script>
			$('.item').css("display","block");
			$('.ellipsis').ellipsis();
		  	$('.item').removeAttr('style');	

			$(window ).resize(function() {
				$('.item').css("display","block");
				$('.ellipsis').ellipsis();
		  		$('.item').removeAttr('style');	
			});
		</script>

	</body>
</html>