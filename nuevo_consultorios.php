<?php include("Consultorio.php");?>

<?php


$th = new Consultorio('1','pedro','2645432768','tacuari 1898','roza@gmail.com','santa roza','limpieza');
echo "<br>dato Consultorio :" .$th->get_id() ." - ".$th->get_nombre() ." - ".$th->get_telefono() ." - ".$th->get_direccion() ." - ".$th->get_email() ." - ".$th->get_web() ." - ".$th->get_sanatorio() ." - ".$th->get_empleado();


?>

