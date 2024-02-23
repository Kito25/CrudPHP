<?php
// clase Principal
class Empleado {  
    private $nombre;
    private $email;
    private $telefono;
    private $tipo_empleado;    
  
  public function __construct($vnombre,$vemail,$vtelefono,$vtipo_empleado) {
       $this->nombre = $vnombre;
       $this->email = $vemail;
       $this->telefono = $vtelefono;
       $this->tipo_empleado = $vtipo_empleado;
   }
    
    public function __destruct(){
		// destruir objetos
	}
	
	//metodos get / set   
    

    public function get_nombre() {
        return $this->nombre;
    }
    public function get_email() {
        return $this->email;
    
    }
    public function get_telefono() {
        return $this->telefono;
    }
    public function get_tipo_empleado() {
        return $this->tipo_empleado;
    } 
	//metodos get / set   
    
    public function set_nombre($u) {
        $this->nombre=$u;
    }
    public function set_email($p) {
        $this->email=$p;
    }
    public function set_telefono($p) {
        $this->telefono=$p;
    }
    public function set_tipo_empleado($p) {
        $this->tipo_empleado=$p;
    }

}
?>