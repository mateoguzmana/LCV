<?php 
include "../php/classes/fondos.class.php";

$query = new Fondos();
$Consulta = $query->Listar();
?>
           <div class="container-fluid">
            <div class="row">
            <?php foreach($Consulta as $fila): ?>
            <form id="form" name="form" action="php/act_fondos.php?Id=Inicio" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <h4 class="text-info">Banner principal inicio</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Fondo (2000 x 1300 px)</label>
                            <input type="file" class="form-control" id="Fondo1" name="Fondo1">
                        </div> 
                        <a href="Photos/Principal/Inicio/Banner/<?=$fila['Fondo1']?>" target="_blank" class="link">(Ver foto)</a>  
                     </div>  
                     <!--<div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Botón</label>
                            <input type="file" class="form-control" id="Boton" name="Boton">
                        </div>
                        <a href="Photos/Principal/Inicio/Boton/<?//=$fila['Boton']?>" target="_blank" class="link">(Ver foto)</a> 
                     </div> -->
                    <div class="col-sm-2">
                            <label class="control-label">&nbsp;</label>
                            <button type="submit" class="form-control btn btn-info">Guardar</button>
                     </div> 
                </div>
            </form>
            <!--
            <form id="form" name="form" action="php/act_fondos.php?Id=Galeria" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <h4 class="text-info">Banner Galeria</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Fondo (2000 x 1300 px)</label>
                            <input type="file" class="form-control" id="Fondo2" name="Fondo2">
                        </div>  
                        <a href="Photos/Principal/Galeria/<?//=$fila['Fondo2']?>" target="_blank" class="link">(Ver foto)</a>  
                     </div> 
                     <div class="col-sm-5"></div> 
                    <div class="col-sm-2">
                            <label class="control-label">&nbsp;</label>
                            <button type="submit" class="form-control btn btn-info">Guardar</button>
                     </div> 
                </div>
            </form>-->
            <!--<form id="form" name="form" action="php/act_fondos.php?Id=Voluntarios" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <h4 class="text-info">Banner Voluntarios</h4>
                                <hr size="90%">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Fondo (2000 x 1300 px)</label>
                            <input type="file" class="form-control" id="Fondo3" name="Fondo3" >
                        </div>  
                        <a href="Photos/Principal/Voluntarios/<?//=$fila['Fondo3']?>" target="_blank" class="link">(Ver foto)</a>  
                     </div>
                    <div class="col-sm-5"></div> 
                    <div class="col-sm-2">
                            <label class="control-label">&nbsp;</label>
                            <button type="submit" class="form-control btn btn-info">Guardar</button>
                     </div> 
                </div>
            </form>-->
                <div class="col-sm-12">
                    &nbsp;
                </div>
            <?php endforeach; ?>
            </div>
           </div>
            <!-- /.container-fluid -->