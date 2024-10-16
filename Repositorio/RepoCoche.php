<?php
$base = $_SERVER['DOCUMENT_ROOT'] . '/TiendaCochesClasess';
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
        $stm = $this->con->prepare("select * from car where idcar =  :matricula");
        $stm->execute(['matricula' => $matricula]);
        $coche=null;
        $registro = $stm->fetch();
        if($registro){
            $matricula = $registro['idcar'];
            $marcaa = $registro['brand'];
            $modelo = $registro['brand_model'];
            $marca = new Marca($marcaa, $modelo);
            $coche = new Coche($matricula, $marca);

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
