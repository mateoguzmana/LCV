<?php 
include "../php/classes/upload.class.php";

$query = new Upload();
$Consulta = $query->Aprobadas();
?>
           <div class="container-fluid">
            <div class="row">
                <div class="col-sm12">
                    <table class="table">
                        <thead>
                            <th></th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Nombre del personaje</th>
                            <th></th>
                            <th></th>
                        </thead>
                    <?php foreach($Consulta as $fila): ?>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?=$fila["Nombre"]?></td>
                                <td><?=$fila["Email"]?></td>
                                <td><?=$fila["Personaje"]?></td>
                                <td><a href="Photos/Upload/<?=$fila['Url']?>" target="_blank" class="link">(Ver foto)</a></td>
                                <td style="width:20%;text-align:right;">
                                    <a onclick="window.location.href='php/status_image.php?S=0&Id=<?=$fila['Id']?>';"><button class="btn btn-danger">Volver a inactivas</button></a>
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
                    <a href="#aprobar" onclick="LoadPage('aprobar.php');"><button class="btn btn-info">Volver</button></a>
                </div>
            </div>
           </div>
            <!-- /.container-fluid -->