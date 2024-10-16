<?php
$base = $_SERVER['DOCUMENT_ROOT'];
require_once "$base/modelo/Coche.php";
class RepoCoche implements RepoCrud {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function add($coche) {
        // Lógica para agregar el coche a la base de datos
        // No devuelve nada
    }

    public function findById($matricula) {
        $stm = $this->con->prepare("select * from car where id_car =  :matricula");
        $stm->execute(['matricula' => $matricula]);
        $coche=null;
        $registro = $stm->fetch();
        if($registro){
            $coche = new Coche();
            $coche->matricula = $registro['matricula'];
            $coche->marca = $registro['marca'];
            $coche->modelo = $registro['modelo'];            
        }
        return $coche;
        
    }


    public function update($coche) {
        // Lógica para actualizar el coche en la base de datos
        // No devuelve nada
    }

    public function delete(int $id): bool {
        // Lógica para eliminar el coche de la base de datos
        return true;
    }

    public function getAll(): array {
        // Lógica para obtener todos los coches de la base de datos
        return [];
    }
}
?>
