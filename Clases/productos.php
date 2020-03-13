<?php

class Producto {
    protected $nombre;
    protected $precio;
    protected $imagen;

    public function __construct($nombre, $precio, $imagen) {
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->imagen=$imagen;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio=$precio;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function setImagen($imagen){
        $this->imagen=$imagen;
    }
}


?>