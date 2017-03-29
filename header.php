<!--=== header ===-->
<header>
	<div class="container">
		<div class="row">

			<!-- logo -->
			<div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 text-center">
				<a href="index.php"><img src="images/logo.png" class="logo"/></a>
			</div>

			<div class="col-md-9 col-sm-8 col-xs-12 text-right">

				<?php
					$page = basename(basename($_SERVER['SCRIPT_NAME']),'.php');
				?>

				<ul class="custom-nav">

					<li class="<?php echo ($page == 'index' ? 'active' : ''); ?>"><a href="index.php"><div class="square"></div>Home</a></li>
					<li class="<?php echo ($page == 'sobre' ? 'active' : ''); ?>"><a href="sobre.php"><div class="square"></div><?php echo $text['sobre']?></a></li>
					<li class="<?php echo ($page == 'metas' ? 'active' : ''); ?>"><a href="metas.php"><div class="square"></div><?php echo $text['metas']?></a></li>
					<li class="<?php echo ($page == 'noticias' ? 'active' : ''); ?>"><a href="noticias.php"><div class="square"></div><?php echo $text['noticias']?></a></li>
					<li class="<?php echo ($page == 'contato' ? 'active' : ''); ?>"><a href="contato.php"><div class="square"></div><?php echo $text['contato']?></a></li>

				</ul>
			</div>
		</div>
	</div>
</header>