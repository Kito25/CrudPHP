<?php include("includes/header.php")?>
<?php 
include("Empleado.php");  
include("FileManager.php");  
?>

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>nombre</th>
                            <th>email</th>
                            <th>telefono</th>
                            <th>tipo_empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      $fileManager = new FileManager('data.txt');
                      $registros = $fileManager->leer();
                      foreach ($registros as $index => $registro) {
                          list($nombre,$email,$telefono,$tipo_empleado) = explode(',', $registro);
                          //echo "<li>$id - $usuario - $clave (<a href='editar.php?index=$index'>Editar</a> | <a href='eliminar.php?index=$index'>Eliminar</a>)</li>";
                         ?>
                            <tr>
                                <td><?php echo $nombre?></td>
                                <td><?php echo $email;?></td>
                                <td><?php echo $telefono?></td>
                                <td><?php echo $tipo_empleado?></td>
                                <td>
                                <a href='updateData.php?index=<?php echo $index?>'> 
                                    <button type="button" class="btn btn-warning" name="update">Modificar</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

<?php include("includes/footer.php")?>
