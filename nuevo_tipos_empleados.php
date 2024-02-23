<?php include("Tipo_empleado.php");?>

<?php

$h = new Tipo_empleado('1','Medico');
echo "<br>dato hotel :" .$h->get_id() ." - ".$h->get_nombre().;

?>