<?php 
include "../php/classes/contacto.class.php";

$query = new Contacto();
$Consulta = $query->Listar();
?>
           <div class="container-fluid">

            <form id="form" name="form" action="php/act_contacto.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <div class="col-sm-12">
                    <h4 class="text-info">Página contácto</h4>
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Titulo secundario</label>
                            <input type="text" class="form-control" id="T2" name="T2" value="<?=$fila['T2']?>" required>
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                            <label class="control-label">Sub-titulo</label>
                            <input type="text" class="form-control" id="S1" name="S1" value="<?=$fila['S1']?>" required>
                     </div> 
                </div>
                <div class="col-sm-12">
                     <div class="col-sm-6">
                            <label class="control-label">Email de contácto</label>
                            <input type="email" class="form-control" id="Email" name="Email" value="<?=$fila['Email']?>" required>
                     </div>                     
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Multimedia</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                     <div class="col-sm-6">
                            <label class="control-label">Foto</label>
                            <input type="file" class="form-control" id="Foto" name="Foto">
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