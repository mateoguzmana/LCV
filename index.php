<?php 
include "_includes/master.class.php";

$query = new Master();
$Content = $query->ContenidoPrincipal();

	foreach ($Content as $Con) {

		$Titulo  	= $Con["Titulo"];
		$Frase   	= $Con["Frase"];
		$T1 	 	= $Con["T1"];
		$S1  	 	= $Con["S1"];
		$T2		 	= $Con["T2"];
		$S2 	 	= $Con["S2"];
		$Video 		= $Con["Video"];
		$Twitter 	= $Con["Twitter"];
		$Facebook 	= $Con["Facebook"];
		$Instagram	= $Con["Instagram"];
		$Youtube	= $Con["Youtube"];

	}

$Voluntarios = $query->Voluntarios();
$Proyectos   = $query->Proyectos();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Los Chanchos Vuelan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo"><?=$Titulo?></a></h1>
								<br>
								<p style="text-shadow: 2px 2px #999;"><?=$Frase?></p>
							</header>
							<!--<footer>
								<a href="J.php"><img src="Admin/Photos/Principal/Inicio/Boton/boton.jpg" style="width:90px;height:90px;"></a>
							</footer>-->
						</div>

						<?php 
						include "_includes/nav.php";
						?>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2><?=$T1?></h2>
						<p style="margin:0 auto;width:80%;"><?=$S1?></p>
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">
						<?php 
						foreach ($Proyectos as $Proyecto) {
						?>
						<article>
							<a href="#" class="image featured"><img width="368" height="256" src="Admin/Photos/Proyectos/<?=$Proyecto["Foto"]?>" alt=""/></a>
							<header>
								<h3><a href="#"><?=$Proyecto["Nombre"]?></a></h3>
							</header>
							<p><?=$Proyecto["Texto"]?></p>
						</article>
						<?php
						}
						?>
					</div>
				</section>

			<!-- Main -->
				<div style="background-color: rgba(131, 54, 255, 0.6);" class="wrapper style1">

					<article id="main" class="container special">
						<div class="image featured videowrapper"><?=$Video?></div>
					</article>

				</div>

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2><?=$T2?></h2>
							<p><?=$S2?></p>
						</header>
						<div class="row">
							<?php 
							foreach ($Voluntarios as $Voluntario) {
							?>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img style="min-width:350px;min-height:350px;max-width:350px;max-height:350px;border-radius:100%;" onmouseover="hover(this,'Admin/Photos/Voluntarios/G/<?=$Voluntario["Foto2"]?>');"
								onmouseout="unhover(this,'Admin/Photos/Voluntarios/P/<?=$Voluntario["Foto"]?>');"
								 src="Admin/Photos/Voluntarios/P/<?=$Voluntario["Foto"]?>" alt="" /></a>
								<header>
									<h3><a href="#"><?=$Voluntario["Nombre"]?></a></h3>
								</header>
								<p style="text-align:center;"><?=$Voluntario["Frase"]?></p>
							</article>
							<?php
							}
							?>
						</div>
					</section>

				</div>

				<?php 
				include "_includes/footer.php";
				?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript">
				function hover(element, src) {
   				element.setAttribute('src', src).fadeIn();
				}
				function unhover(element, src) {
				    element.setAttribute('src', src).fadeIn();
				}
			</script>
	</body>
</html>