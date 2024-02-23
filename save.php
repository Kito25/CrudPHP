<?php 
include("Empleado.php");
include("FileManager.php");
$fileManager = new FileManager('data.txt');

if (isset($_POST['guardar_registro'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $tipo_empleado = $_POST['tipo_empleado'];
    //echo $nombres;
    //echo $direccion;


     $empleado= new Empleado($nombre,$email,$telefono,$tipo_empleado);
     $fileManager->guardar($empleado);

        ?>
        <script>alert("Registro Guardado");</script>

    <script>
    window.location = "index.php";
    </script>
<?PHP }?>