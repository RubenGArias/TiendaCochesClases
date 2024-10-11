<?php

Class User{
    public $correo;
    public $contraseña;

    public function __construct($correo, $contraseña){
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }

    public function muestra(){
        return  "Correo: $this->correo, Contraseña: $this->contraseña";

    }
}

?>