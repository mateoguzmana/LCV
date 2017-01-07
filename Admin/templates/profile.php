<?php 
include "../php/classes/profile.class.php";

$query = new Profile();
$Consulta = $query->Listar();
?>
<div class="container-fluid">

            <form id="form" name="form" action="php/act_profile.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?=$fila['Nombre']?>" >
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email" value="<?=$fila['Email']?>" >
                        </div>
                     </div> 
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Usuario</label>
                            <input type="text" class="form-control" id="Usuario" name="Usuario" value="<?=$fila['Usuario']?>">
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Contraseña</label>
                            <input type="password" class="form-control" id="Password" name="Password" value="<?=$fila['Password']?>" >
                        </div>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>    
                </div>
            <?php endforeach; ?>
            </div>
            </form>

           </div>
            <!-- /.container-fluid -->