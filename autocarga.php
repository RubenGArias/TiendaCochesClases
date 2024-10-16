<?php
//Sirve para cargar directamente todos los required en el index

//Para cargar los helpers
$directorios=['Control','helpers','modelo', 'Repositorio', 'Vista'];

foreach($directorios as $directorio){
    spl_autoload_register(function($clase) use ($directorio)
    {
        $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/'.$directorio.'/'.$clase.'.php';
        if(file_exists($fichero))
        {
            include_once $fichero;
        }
        
    });
}
spl_autoload_register(function($clase)
{
    $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/helpers/'.$clase.'.php';
    if(file_exists($fichero))
    {
        include_once $fichero;
    }
    
});