<?php
class FileManager {
    private $filename;
    private $empleado = [];
   // private $archivo = 'usuarios1.txt';

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function guardar($empleado) {
        $linea = "{$empleado->get_nombre()},{$empleado->get_email()},{$empleado->get_telefono()},{$empleado->get_tipo_empleado()}\n";
       // file_put_contents($this->archivo, $linea, FILE_APPEND);
        file_put_contents($this->filename, $linea . PHP_EOL, FILE_APPEND);
    }

    public function leer() {
        if (file_exists($this->filename)) {
            return file($this->filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        }
        return [];
    }

    public function actualizar($index, $empleado) {
        $lines = $this->leer();
        if (isset($lines[$index])) {
            $lines[$index] = "{$empleado->get_nombre()},{$empleado->get_email()},{$empleado->get_telefono()},{$empleado->get_tipo_empleado()}\n";
            //$lines[$index] = $newData;
            file_put_contents($this->filename, implode(PHP_EOL, $lines));
        }
    }

    public function eliminar($index) {
        $lines = $this->leer();
        if (isset($lines[$index])) {
            unset($lines[$index]);
            file_put_contents($this->filename, implode(PHP_EOL, $lines));
        }
    }
}