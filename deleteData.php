<?php
include("Empleado.php");  
include("FileManager.php"); 
$fileManager = new FileManager('data.txt');

if(isset($_GET['index'])){
    $index = $_GET['index'];
    $fileManager->eliminar($index);
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
      
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "index.php";
    </script>
    

