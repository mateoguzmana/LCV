<?php 
include "../php/classes/super.class.php";

$query = new Super();
$Consulta = $query->Listar();
?>
           <div class="container-fluid">

            <form id="form" name="form" action="php/act_super.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <div class="col-sm-12">
                    <h4 class="text-info">Página soy mi súper heroe</h4>
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
                            <label class="control-label">Sub-titulo</label>
                            <input type="text" class="form-control" id="S1" name="S1" value="<?=$fila['S1']?>" required>
                     </div>
                </div>
                <div class="col-sm-12">
                    &nbsp;
                </div>  
                <div class="col-sm-12">
                    <h5 class="text-info">Multimedia</h5>
                                <hr size="90%">
                </div>
                <div class="col-sm-12"> 
                     <div class="col-sm-6">
                            <label class="control-label">Foto</label>
                            <input type="file" class="form-control" id="Foto" name="Foto">
                            <a href="Photos/Super/<?=$fila['Foto']?>" target="_blank" class="link">(Ver foto)</a>  
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