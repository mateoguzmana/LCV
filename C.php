<?php 
include "_includes/master.class.php";

$query = new Master();
$Content = $query->Comparte();

foreach ($Content as $Comparte) {

	$T1  = $Comparte["T1"];
	$T2  = $Comparte["T2"];
	$S2  = $Comparte["S2"];
	$T3  = $Comparte["T3"];
	$S3  = $Comparte["S3"];

}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Comparte - LCV</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<link rel="stylesheet" type="text/css" href="assets/css/estilo.css"/><!-- estilos Espacio de carga -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/><!-- celdas bootstrap -->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><?=$T1?></h1>
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
							<div class="8u 12u(mobile)" id="content">
								<article id="main">
									<header>
										<h2><a href="#"><?=$T2?></a></h2>
										<p>
											<?=$S2?>
										</p>
									</header>
									<!-- inicio de ventana para cargar imagenes -->
									<div class="container well upload-form">
										<form method="POST" enctype="multipart/form-data" action="Admin/php/upload_image.php">
											<input type="hidden" name="accion" value="subir">
											<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
												<div class="row">
													<div class="col-md-6 col-ms-12">
														<div class="dropzone vcenter">
															<div class="dropzone-info">
																<input type="file" id="files" name="files" accept="image/*" /><output id="list"></output>
																<p class="text-center">Haz click o arrastra aqui la foto</p>
																<ul>
																	<li>Formatos: JPG, GIF, PNG</li>
																	<li>Tamaño máximo de archivo: 10MB</li>
																	<li>No subir contenido para adultos o bélico</li>
																	<li>Si las imágenes <b>no cumplen con los requisitos mínimos</b> serán eliminadas</li>
																</ul>
															</div>
															<div class="dropzone-preview vcenter"></div>
        
														    <script>
														    	function archivo(evt) {
														    		var files = evt.target.files; // FileList object 
															    	// Obtenemos la imagen del campo "file".
														    		for (var i = 0, f; f = files[i]; i++) {
														        		//Solo admitimos imágenes.
														        		if (!f.type.match('image.*')) {
														        			continue;
														    		    }
																        var reader = new FileReader();
																        reader.onload = (function(theFile) {
																	        return function(e) {
																        	// Insertamos la imagen
														         			document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
														        			};
														        		})(f);
															        	reader.readAsDataURL(f);
															    	}
														    	}
														    	document.getElementById('files').addEventListener('change', archivo, false);
															</script>
														</div>
													</div>
													<div class="col-md-6 col-ms-12">
														<p></p>
														<div class="form-group input-group">
															<span class="input-group-addon"><i class="fa fa-eye fa-lg fa-fw"></i></span>
																<input type="text" class="form-control" name="Nombre" placeholder="Tu nombre" required>
														</div>
														<div class="form-group input-group">
														<span class="input-group-addon"><i class="fa fa-key  fa-lg fa-fw"></i></span>
															<input type="Email" class="form-control" name="Email" placeholder="Tu email" required>
														</div>
														<div class="form-group input-group">
														<span class="input-group-addon"><i class="fa fa-shield fa-lg fa-fw"></i></span>
															<input type="text" class="form-control" name="Personaje" placeholder="Nombre de tu personaje" required>
														</div>
														<div class="g-recaptcha" data-sitekey="6LdNvgcUAAAAADlDr7vNfmi2ishnL-ND3d9X_oGz"></div>
														<br>
													<div class="form-group">
														<button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-cloud-upload fa-lg"></i> Subir foto</button>
													</div>
													<p></p>
												</div>
											</div>
										</form>
									</div>
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="V.php"><?=$T3?></a></h3>
									</header>
									<p>
										<?=$S3?>
									</p>
								</section>
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
			<script src='https://www.google.com/recaptcha/api.js'></script>
	</body>
</html>