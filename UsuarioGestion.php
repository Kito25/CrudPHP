<?php
class UsuarioGestion {
    // array
    private $usuarios = [];
    // archivo
    private $archivo = 'usuarios.txt';
    
    //=== array para objetos
    public function agregarUsuario(Empleado $usuario) {
        $this->usuarios[] = $usuario;        
    }

    public function obtenerUsuarios() {
        return $this->usuarios;
    }
    //=== array para objetos

    //=== persistencia por archivos
    public function agregarUsuarioIO(Empleado $usuario) {
        $linea = "{$usuario->get_id()},{$usuario->get_nombre()},{$usuario->get_codigo_hotel()},{$usuario->get_tipo_empleado()}\n";
        file_put_contents($this->archivo, $linea, FILE_APPEND);
    }

    public function obtenerUsuariosIO() {
        $usuarios = [];

        if (file_exists($this->archivo)) {
            $lineas = file($this->archivo);
            foreach ($lineas as $linea) {
                $datos = explode(',', trim($linea));
                $usuarios[] = new Empleado($datos[0], $datos[1], $datos[2],$datos[3]);
            }
        }

        return $usuarios;
    }

    
    //=== persistencia por archivos

}
?>