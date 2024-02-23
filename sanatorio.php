<?php
// clase Principal
class sanatorio {  
	private $id;
    private $nombre;
    private $telefono;
    private $direccion;
    private $email;    
    private $web;        
  
  public function __construct($vid,$vnombre,$vtelefono,$vdireccion,$vemail,$vweb) {
       $this->id = $vid;
       $this->nombre = $vnombre;
       $this->telefono = $vtelefono;
       $this->direccion = $vdireccion;
       $this->email = $vemail;
       $this->web = $vweb;

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
	//metodos get / set   
    public function set_id($p) {
        $this->id=$p;
    }
 
    public function set_nombre($u) {
        $this->nombre=$u;
    }
    public function set_telefono($p) {
        $this->telefono=$p;
    }
    public function set_direccion($p) {
        $this->direccion=$p;
    }
    public function set_email($p) {
        $this->email=$p;
    }
    public function set_web($p) {
        $this->web=$p;
    }

}
?>