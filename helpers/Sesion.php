<?php
Class Sesion {
    public static function iniciaSession(){
        session_start();
    }
    
    public static function cierraSession(){
        session_unset();
    }
    
    public static function leerSession($user){
        if(isset($_SESSION[$user])){
            return $_SESSION['user'];
        }else{
            return "";
        }
    }
    
    public static function escribeSession($clave, $value){
        $_SESSION[$clave]=$value;
    }
    
    public static function login($user){
        Sesion::iniciaSession();
        $_SESSION['user']=$user;
    }
    
    public static function logout(){
        session_destroy();
        //destruyo la sesión
    }
    
    public static function estaLogeado(){
        return isset($_SESSION['user']);
    }
    
}

?>
