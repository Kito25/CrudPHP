<?php include("Empleado.php");?>

<?php

//TIPO EMPLEADO
$te = new Empleado('franco','franco@gmail.com','26454432432','Medico');
echo "dato tipo empleado : ".$te->get_nombre()" ".$te->get_email()" ".$te->get_telefono()" ".$te->get_tipo_empleado();

?>