<?php 
include "_includes/master.class.php";

$query = new Master();
$Content = $query->Super();

foreach ($Content as $Comparte) {

	$T1    = $Comparte["T1"];
	$T2    = $Comparte["T2"];
	$S1    = $Comparte["S1"];
	$Foto  = $Comparte["Foto"];

}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Soy mi súper heroe - LCV</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo"><?=$T1?></a></h1>
							</header>
						</div>

						<?php 
						include "_includes/nav.php";
						?>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="12u 12u(mobile) important(mobile)" id="content">
								<article id="main">
									<header>
										<h2><a href="#"><?=$T2?></a></h2>
										<p>
											<?=$S1?>
										</p>
									</header>
									<a href="https://play.google.com/store/apps/details?id=com.jenabe.soymisuperheroe&hl=es" class="image featured" target="_blank"><iframe width="1280" height="720" src="https://www.youtube.com/embed/fdXiZSadvVY" frameborder="0" allowfullscreen></iframe><!--<img src="Admin/Photos/Super/<?=$Foto?>" alt=""/> --></a>
								</article>
							</div>
						</div>
					</div>

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

	</body>
</html>