<?php 
include "../php/classes/voluntarios.class.php";

$Id    = $_GET["Id"];

$query = new Voluntarios();
$Consulta = $query->GetId($Id);
?>
           <div class="container-fluid">

            <form id="form" name="form" action="php/act_voluntario_2.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <input type="hidden" name="Id" value="<?=$Id?>">
                <div class="col-sm-12">
                    <h4 class="text-info">Actualizar voluntario</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?=$fila['Nombre']?>" required>
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                            <label class="control-label">Frase</label>
                            <input type="text" class="form-control" id="Frase" name="Frase" value="<?=$fila['Frase']?>" required>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Multimedia</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Foto niño (350 x 350 px)</label>
                            <input type="file" class="form-control" id="Foto" name="Foto">
                        </div>  
                        <?php if(!empty($fila["Foto"])){?>
                        <a href="Photos/Voluntarios/P/<?=$fila["Foto"]?>" target="_blank" title="Ver imacompleta">(Ver foto)</a>
                        <?php }?> 
                     </div>  
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Foto adulto (350 x 350 px)</label>
                            <input type="file" class="form-control" id="Foto2" name="Foto2">
                        </div>
                        <?php if(!empty($fila["Foto2"])){?>
                        <a href="Photos/Voluntarios/G/<?=$fila["Foto2"]?>" target="_blank" title="Ver imagen completa">(Ver foto)</a>
                        <?php }?>
                     </div> 
                </div>
                <div class="col-sm-12">
                    &nbsp;
                </div>   
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-info">Guardar</button>
                        <a onclick="LoadPage('voluntarios.php');" href="#voluntarios"><button type="button" class="btn btn-warning">Volver</button></a>
                    </div>    
                </div>
            <?php endforeach; ?>
            </div>
            </form>

           </div>
            <!-- /.container-fluid -->