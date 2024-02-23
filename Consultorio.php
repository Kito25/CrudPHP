<?php
// clase Principal
class Consultorio {  
	private $id;
    private $nombre;
    private $telefono;
    private $direccion;
    private $email;
    private $web;
    private $sanatorio;
    private $empleado;
       
  
  public function __construct($vid,$vnombre,$vtelefono,$vdireccion,$vemail,$vweb,$vsanatorio,$vempleado) {
       $this->id = $vid;
       $this->nombre = $vnombre;
       $this->telefono = $vtelefono;
       $this->direccion = $vdireccion;
       $this->email = $vemail;
       $this->web = $vweb;
       $this->sanatorio = $vsanatorio;
       $this->empleado = $vempleado;
       
       
   }
    
    public function __destruct(){
		// destruir objetos
	}
	
	//metodos get / set   
    public function get_id() {
        return $this->id;
    
    }

    public function get_nombre() {
        return $this->nombre;
    }
    public function get_telefono() {
        return $this->telefono;
    }
    public function get_direccion() {
        return $this->direccion;
    }
    public function get_email() {
        return $this->email;
    }
    public function get_web() {
        return $this->web;
    }
    public function get_sanatorio() {
        return $this->sanatorio;
    }
    public function get_empleado() {
        return $this->empleado;
    }
  
	//metodos get / set   
    public function set_id($p) {
        $this->id=$p;
    }
 
    public function set_nombre($u) {
        $this->nombre=$u;
    }
    public function set_telefono($u) {
        $this->telefono=$u;
    }
    public function set_email($u) {
        $this->email=$u;
    }
    public function set_web($u) {
        $this->web=$u;
    }
    public function set_sanatorio($u) {
        $this->sanatorio=$u;
    }
    public function set_empleado($u) {
        $this->empleado=$u;
    }
  
  

}
?>