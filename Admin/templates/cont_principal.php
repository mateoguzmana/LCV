<?php 
include "../php/classes/cont_principal.class.php";

$query = new ContenidoP();
$Consulta = $query->Listar();
?>
           <div class="container-fluid">

            <form id="form" name="form" action="php/act_contenido_principal.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
                <div class="col-sm-12">
                    <h4 class="text-info">Banner principal</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Titulo principal</label>
                            <input type="text" class="form-control" id="Titulo" name="Titulo" value="<?=$fila['Titulo']?>" required>
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                            <label class="control-label">Frase principal</label>
                            <input type="text" class="form-control" id="Frase" name="Frase" value="<?=$fila['Frase']?>" required>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Banner Galeria</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Titulo principal</label>
                            <input type="text" class="form-control" id="T1" name="T1" value="<?=$fila['T1']?>" required>
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                            <label class="control-label">Frase principal</label>
                            <input type="text" class="form-control" id="S1" name="S1" value="<?=$fila['S1']?>" required>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Vídeo</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Vídeo (Iframe de youtube)</label>
                            <textarea id="Video" name="Video" class="form-control" required><?=$fila['Video']?></textarea>
                        </div>   
                     </div>
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Banner Voluntarios</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Titulo principal</label>
                            <input type="text" class="form-control" id="T2" name="T2" value="<?=$fila['T2']?>" required>
                        </div>   
                     </div>  
                     <div class="col-sm-6">
                            <label class="control-label">Frase principal</label>
                            <input type="text" class="form-control" id="S2" name="S2" value="<?=$fila['S2']?>" required>
                     </div> 
                </div>
                <div class="col-sm-12">
                    <h4 class="text-info">Redes sociales</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                     <div class="col-sm-6">
                            <label class="control-label">Twitter</label>
                            <input type="text" class="form-control" id="Twitter" name="Twitter" value="<?=$fila['Twitter']?>" required>
                    </div> 
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input type="text" class="form-control" id="Facebook" name="Facebook" value="<?=$fila['Facebook']?>" required>
                        </div>   
                     </div>  
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Instagram</label>
                            <input type="text" class="form-control" id="Instagram" name="Instagram" value="<?=$fila['Instagram']?>" required>
                        </div>   
                     </div> 
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Youtube</label>
                            <input type="text" class="form-control" id="Youtube" name="Youtube" value="<?=$fila['Youtube']?>" required>
                        </div>   
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