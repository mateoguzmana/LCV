<?php  
if(empty($_GET["R"])){
  $Respuesta = "";
  $S = "display:none;";
}else{
  $Respuesta = "Usuario o contraseña incorrectos.";
    $S = "";
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login LCV</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
    <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/style.css">   
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group" style="display:none;">
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
        <div style="color:red;<?=$S?>"><?=$Respuesta?></div>
          
        <div id="login">   
          <h1>Bienvenido!</h1>
          
          <form action="../php/login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input name="Usuario" type="text" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input name="Password" type="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Olvidaste tu contraseña?</a></p>
          
          <button class="button button-block"/>Iniciar sesión</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="js/index.js"></script>
      </body>
</html>
