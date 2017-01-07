<?php 
include "../php/classes/proyectos.class.php";

$Id    = $_GET["Id"];

$query = new Proyectos();
$Consulta = $query->GetId($Id);
?>
           <div class="container-fluid">

            <form id="form" name="form" action="php/act_proyecto_2.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <input type="hidden" name="Id" value="<?=$Id?>">
                <div class="col-sm-12">
                    <h4 class="text-info">Actualizar proyecto</h4>
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
                            <label class="control-label">Texto</label>
                            <textarea class="form-control" id="Texto" name="Texto" required><?=$fila['Texto']?></textarea>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Multimedia</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Foto (368 x 256 px)</label>
                            <input type="file" class="form-control" id="Foto" name="Foto">
                        </div>   
                        <?php if(!empty($fila['Foto'])){?>
                        <a title="Ver foto completa" href="Photos/Proyectos/<?=$fila['Foto']?>" target="_blank" class="link">(Ver foto)</a>
                        <?php }?>
                     </div> 
                </div>
                <div class="col-sm-12">
                    &nbsp;
                </div>   
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-info">Guardar</button>
                        <a onclick="LoadPage('proyectos.php');" href="#proyectos"><button type="button" class="btn btn-warning">Volver</button></a>
                    </div>    
                </div>
            <?php endforeach; ?>
            </div>
            </form>

           </div>
            <!-- /.container-fluid -->