<?php 
include "../php/classes/voluntarios.class.php";

$query = new Voluntarios();
$Consulta = $query->Listar();
?>
           <div class="container-fluid">
            <div class="row">
                <div class="col-sm12">
                    <table class="table">
                        <thead>
                            <th></th>
                            <th>Nombre</th>
                            <th></th>
                        </thead>
                    <?php foreach($Consulta as $fila): ?>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?=$fila["Nombre"]?></td>
                                <td style="width:20%;text-align:right;">
                                    <a href="#voluntarios/<?=$fila['Id']?>" onclick="LoadPage('act_voluntario.php?Id=<?=$fila['Id']?>');"><button class="btn btn-info">Actualizar</button></a>
                                    <button onclick="if(confirm('¿desea eliminar este voluntario?')){window.location.href='php/eliminar_voluntario.php?Id=<?=$fila["Id"]?>'}" class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <hr size="90%">
                    <a href="#nuevo_voluntario" onclick="LoadPage('nuevo_voluntario.php');"><button class="btn btn-success">Nuevo voluntario</button></a>
                </div>
            </div>
           </div>
            <!-- /.container-fluid -->