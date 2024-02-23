<?php include("includes/header.php")?>
<?php
include("Empleado.php");  
include("FileManager.php"); 
$fileManager = new FileManager('data.txt');

if (isset($_POST['update2'])){
    $index = $_POST['index'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $tipo_empleado = $_POST['tipo_empleado'];
    $empleado= new Empleado($nombre,$email,$telefono,$tipo_empleado);
    $fileManager->actualizar($index, $empleado);
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "index.php";
        </script>
        <?php 
    }

if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $registros = $fileManager->leer();
    list($nombre,$email,$telefono,$tipo_empleado) = explode(',', $registros[$index]);
} 
else {
    header('Location: index.php');
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateData.php?index=<?php echo $_GET['index']; ?>" method="POST">
            <input type="hidden" name="index" value="<?php echo $_GET['index']; ?>">
            <div class="form-group">
            <input type="text" name="nombre" value="<?php print $nombre;?>"
            class = "form-control" placeholder="Actualizar Nombre">
            </div>
            <div class="form-group">
            <input type="text" name="email" value="<?php print $email;?>"
            class = "form-control" placeholder="Actualizar Email">
            </div>
            <div class="form-group">            
            
            <div class="form-group">
            <input type="text" name="telefono" value="<?php print $telefono;?>"
            class = "form-control" placeholder="Actualizar Telefono">
            </div>
            <div class="form-group">
            <div class="form-group">            
             

             <br>
             <select name="tipo_empleado" class='form-control'>
                <?php if ($tipo_empleado=="Limpieza"){?>
                    <option value="Limpieza" selected="selected">Limpieza</option>
                    <option value="Administracion">Administracion</option>
                    <option value="Medico">Medico</option>
                <?php }?>
                <?php if ($tipo_empleado=="Administracion"){?>
                    <option value="Limpieza">Limpieza</option>
                    <option value="Administracion" selected="selected">Administracion</option>
                    <option value="Medico">Medico</option>
                <?php }?> 
                <?php if ($codigo_tipo_empleado=="Medico"){?>
                    <option value="Limpieza">Limpieza</option>
                    <option value="Administracion">Administracion</option>
                    <option value="Medico" selected="selected">Medico</option>
                <?php }?>
             </select>
            </div>
            <button class="btn btn-success" name="update2">Actualizar</button>
            </form>
        </div>
    </div>    

<?php include("includes/footer.php")?>