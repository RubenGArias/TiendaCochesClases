<?php
Class Marca {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo){
        $this->marca=$marca;
        $this->modelo=$modelo;
    }

    public function muestra(){
        return $this->marca . " " . $this->modelo;
    }
    
        
    
}
?>