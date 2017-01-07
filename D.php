<?php 
include "_includes/master.class.php";

$query = new Master();
$Content = $query->Contacto();

foreach ($Content as $Comparte) {

	$T1  = $Comparte["T1"];
	$T2  = $Comparte["T2"];
	$S1  = $Comparte["S1"];

}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Dona - LCV</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
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
				<div class="wrapper style1" style="background-color: rgba(210, 78, 149, 0.05);">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2><a href="#"><?=$T2?></a></h2>
								<p>
									<?=$S1?>
								</p>
							</header>
							<section>
								<header>
									<h3>Formulario de contácto</h3>
								</header>
								<form>
								<div style="width:100%;">
									<div style="width:50%;" class="col-sm-6">
                					    <div class="col-sm-6">
                					        <div class="form-group">
                					            <label class="control-label">Nombre</label>
                					            <input type="text" class="form-control" placeholder="Tu nombre" id="Nombre" name="Nombre"	required>
                					        </div>   
                					     </div>  
                					     <br>
                					     <div class="col-sm-6">
                					        <div class="form-group">
                					            <label class="control-label">Email</label>
                					            <input type="email" class="form-control" placeholder="Tu Email" id="Email" name="Email"	required>
                					        </div>   
                					     </div>  
                					     <br>                					   
                					     <div class="col-sm-6">
                					        <div class="form-group">
                					            <label class="control-label">Motivo del mensaje</label>
                					            <select class="form-control" id="Motivo" name="Motivo" required>
                					            	<option value="">Selecciona una opción</option>
                					            	<option value="0">Quiero ver voluntario</option>
                					            	<option value="1">Quiero donar</option>
                					            	<option value="2">Otro</option>
                					            </select>
                					        </div>   
                					     </div>  
                					     <br>
                					     <div class="col-sm-6">
                					            <label class="control-label">Mensaje</label>
                					            <textarea class="form-control" placeholder="Tu mensaje" id="Mensaje" name="Mensaje" required></textarea>
                					     </div>
                					     <br>
                					     <div class="col-sm-6">
                					            <label class="control-label">&nbsp;</label>
                					           	<input type="submit" class="form-control btn btn-info">
                					     </div> 
                					</div>
                				</div>
                				</form>
							</section>
						</article>
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