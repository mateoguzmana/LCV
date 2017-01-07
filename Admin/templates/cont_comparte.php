<?php 
include "../php/classes/comparte.class.php";

$query = new Comparte();
$Consulta = $query->Listar();
?>
           <div class="container-fluid">

            <form id="form" name="form" action="php/act_comparte.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <div class="col-sm-12">
                    <h4 class="text-info">Página comparte</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Titulo principal</label>
                            <input type="text" class="form-control" id="T1" name="T1" value="<?=$fila['T1']?>" required>
                        </div>   
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h5 class="text-info">Primer parrafo</h5>
                                <hr size="90%">
                </div>
                <div class="col-sm-12"> 
                     <div class="col-sm-6">
                            <label class="control-label">Titulo</label>
                            <input type="text" class="form-control" id="T2" name="T2" value="<?=$fila['T2']?>" required>
                     </div>
                    <div class="col-sm-6">
                            <label class="control-label">Contenido</label>
                            <textarea class="form-control" id="S2" name="S2" required><?=$fila['S2']?></textarea>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h5 class="text-info">Segundo parrafo</h5>
                                <hr size="90%">
                </div>
                <div class="col-sm-12"> 
                     <div class="col-sm-6">
                            <label class="control-label">Titulo</label>
                            <input type="text" class="form-control" id="T3" name="T3" value="<?=$fila['T3']?>" required>
                     </div>
                    <div class="col-sm-6">
                            <label class="control-label">Contenido</label>
                            <textarea class="form-control" id="S3" name="S3" required><?=$fila['S3']?></textarea>
                     </div> 
                </div>
                <div class="col-sm-12">
                    &nbsp;
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