<!DOCTYPE html>
<html>
	<head>
		
		<?php include_once("head.php"); ?>
		
		<title><?php echo $text['sobre'];?> | NECCULT</title>
		
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
					<div class="col-lg-2 col-sm-3 col-xs-12">

						<div class="about-title">
							<?php echo $text['paginaSobre-titulo']; ?>
						</div>

					</div>

					<!-- imagem equipe -->
					<div class="col-lg-7 col-sm-9 col-xs-12 text-center">
						<span class='zoom' id='equipe'>
							<img src="images/equipe.png" class="about-img" usemap="#Map">

							<map name="Map" id="Map">
							    <area target="_blank" alt="Leandro Valiati" 			title="Leandro Valiati" 			href="http://lattes.cnpq.br/5429770532157362" coords="795,24,957,284" shape="rect">	
							    <area target="_blank" alt="André Cunha" 				title="André Cunha" 				href="http://lattes.cnpq.br/8489743997277206" coords="1059,31,1194,280" shape="rect">
							    <area target="_blank" alt="Marcelo Milan" 				title="Marcelo Milan" 				href="http://lattes.cnpq.br/1850734653719500" coords="138,408,377,657" shape="rect">
							    <area target="_blank" alt="Gustavo Möller" 				title="Gustavo Möller" 				href="http://lattes.cnpq.br/9164913382340261" coords="721,439,873,668" shape="rect">
							    <area target="_blank" alt="Natália Rava" 				title="Natália Rava" 				href="http://lattes.cnpq.br/5092844236201130" coords="60,806,193,1045" shape="rect">
							    <area target="_blank" alt="Débora Wobeto" 				title="Débora Wobeto" 				href="http://lattes.cnpq.br/0233978906174711" coords="315,806,471,1052" shape="rect">
							    <area target="_blank" alt="André Cunha" 				title="André Cunha" 				href="http://lattes.cnpq.br/8489743997277206" coords="1409,642,1541,622" shape="rect">
							    <area target="_blank" alt="Luciana Leite Lima" 			title="Luciana Leite Lima" 			href="http://lattes.cnpq.br/4451526493786828" coords="1387,655,1576,673" shape="rect">
							    <area target="_blank" alt="Marcelo Milan" 				title="Marcelo Milan" 				href="http://lattes.cnpq.br/1850734653719500" coords="1409,690,1549,710" shape="rect">
							    <area target="_blank" alt="Mariana Steffen" 			title="Mariana Steffen" 			href="http://lattes.cnpq.br/8310027079425008" coords="1843,622,2009,639" shape="rect">
							    <area target="_blank" alt="Pedro Perfeito" 				title="Pedro Perfeito" 				href="http://lattes.cnpq.br/3722653047799305" coords="1854,650,1996,673" shape="rect">
							    <area target="_blank" alt="Ana Lúcia Tatsch" 			title="Ana Lúcia Tatsch" 			href="http://lattes.cnpq.br/3668152093811533" coords="1207,875,1385,892" shape="rect">
							    <area target="_blank" alt="Carlos Schonerwald" 			title="Carlos Schonerwald" 			href="http://lattes.cnpq.br/7004184771837401" coords="1197,906,1392,925" shape="rect">
							    <area target="_blank" alt="Cássio da Silva Calvete" 	title="Cássio da Silva Calvete" 	href="http://lattes.cnpq.br/3186172919276668" coords="1176,939,1407,954" shape="rect">
							    <area target="_blank" alt="Gláucia Angélica Campregher" title="Gláucia Angélica Campregher" href="http://lattes.cnpq.br/8095410137448196" coords="1150,966,1441,985" shape="rect">
							    <area target="_blank" alt="Hélio Henkin" 				title="Hélio Henkin" 				href="http://lattes.cnpq.br/3485516815571669" coords="1219,997,1365,1014" shape="rect">
							    <area target="_blank" alt="Henrique Morrone" 			title="Henrique Morrone" 			href="http://lattes.cnpq.br/2470152487280396" coords="1197,1027,1379,1048" shape="rect">
							    <area target="_blank" alt="Ronaldo Herrlein Júnior" 	title="Ronaldo Herrlein Júnior" 	href="http://lattes.cnpq.br/6848864390506924" coords="1177,1056,1412,1077" shape="rect">
							    <area target="_blank" alt="Stefano Florissi"			title="Stefano Florissi" 			href="http://lattes.cnpq.br/0079301614008667" coords="1203,1088,1367,1105" shape="rect">
							    <area target="_blank" alt="Artur Peluso Waismann" 		title="Artur Peluso Waismann" 		href="http://lattes.cnpq.br/4162806965061264" coords="1585,1159,1814,1176" shape="rect">
							    <area target="_blank" alt="Camila Laux Kern" 			title="Camila Laux Kern" 			href="http://lattes.cnpq.br/9944592244180665" coords="1612,1188,1792,1205" shape="rect">
							    <area target="_blank" alt="Camila Lohmann Cauzzi" 		title="Camila Lohmann Cauzzi" 		href="http://lattes.cnpq.br/6440338074983667" coords="1581,1218,1822,1236" shape="rect">
							    <area target="_blank" alt="Eduardo Rodrigues Sanguinet" title="Eduardo Rodrigues Sanguinet" href="http://lattes.cnpq.br/9390018181359032" coords="1550,1249,1836,1267" shape="rect">
							    <area target="_blank" alt="Gabriel Zaffari" 			title="Gabriel Zaffari" 			href="" coords="1623,1281,1778,1298" shape="rect">
							    <area target="_blank" alt="Karina Pietro Biasi Ruiz" 	title="Karina Pietro Biasi Ruiz" 	href="http://lattes.cnpq.br/0935726006717694" coords="1580,1312,1816,1327" shape="rect">
							    <area target="_blank" alt="Leandro Vieira Lima Araújo" 	title="Leandro Vieira Lima Araújo" 	href="http://lattes.cnpq.br/2148932426493681" coords="1561,1341,1840,1356" shape="rect">
							    <area target="_blank" alt="Luciana Linhares de Andrade" title="Luciana Linhares de Andrade" href="http://lattes.cnpq.br/6290433504005623" coords="1561,1370,1842,1389" shape="rect">
							    <area target="_blank" alt="Joana Vacarezza" 			title="Joana Vacarezza" 			href="http://lattes.cnpq.br/5993871268356293" coords="1614,1403,1782,1420" shape="rect">
							</map>

						</span>
					</div>

					<!-- texto sobre -->
					<div class="col-lg-3 col-sm-9 col-xs-12 col-lg-offset-0 col-sm-offset-3">

						<div class="about-text">

							<?php foreach($text['paginaSobre-texto'] as $key => $value):?>
								<p><?php echo $value['paragrafo']; ?></p>
							<?php endforeach;?>

						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-lg-12 col-sm-9 col-lg-offset-0 col-sm-offset-3 text-center">

						<!-- lista de links -->
						<p class="links-list">
							<?php foreach($text['paginaSobre-botoes'] as $key => $value):?>
								<a href="<?php echo $value['link']; ?>" class="button"><?php echo $value['titulo']; ?></a>
							<?php endforeach;?>
						</p>

					</div>
				</div>
			</div>
		</div>

		<!-- idioma -->
		<div class="idioma-content">
			<div class="container text-center">
						
				<a href="index.php?lang=pt" class="button">PT</a>
				<a href="index.php?lang=es" class="button">ES</a>
				<a href="index.php?lang=en" class="button">EN</a>
				
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery.zoom.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#equipe').zoom();
			});
		</script>		
	</body>
</html>