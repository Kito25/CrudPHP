<?php include("sanatorio.php");?>
<?php
$c = new sanatorio('1','privado','4231632','perito moreno 1998','privado@gmail.com','www.privado.org.ar');
echo "<br>dato categoria :" .$c->get_id() ." - ".$c->get_nombre() ." - ".$c->get_telefono() ." - ".$c->get_direccion() ." - ".$c->get_email() ." - ".$c->get_web();
?>