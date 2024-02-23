<?php
// clase Principal
class TipoEmpleado {  
	private $id;
    private $nombre;
       
  
  public function __construct($vid,$vnombre) {
       $this->id = $vid;
       $this->nombre = $vnombre;
   
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
  
	//metodos get / set   
    public function set_id($p) {
        $this->id=$p;
    }
 
    public function set_nombre($u) {
        $this->nombre=$u;
    }
  

}
?>