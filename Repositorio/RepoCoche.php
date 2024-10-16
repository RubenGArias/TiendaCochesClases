<?php
class RepoCoche implements RepoCrud {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::getConnection();
    }

    public function add($coche) {
        // Lógica para agregar el coche a la base de datos
        // No devuelve nada
    }

    public function get(int $id) {
        // Lógica para obtener el coche por ID
        $marca = new Marca("MarcaDePrueba", "ModeloDePrueba");
        return new Coche("1234ABC", $marca);
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
