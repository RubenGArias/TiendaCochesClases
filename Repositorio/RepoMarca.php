<?php
class RepoMarca implements RepoCrud {
    private static $listaMarcas = [];
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::getConnection();
        self::init();
    }

    public static function init() {
        self::$listaMarcas[] = new Marca("Mercedes", "CLE 300");
        self::$listaMarcas[] = new Marca("Ferrari", "Laferrari");
    }

    public function add($marca) {
        self::$listaMarcas[] = $marca;
    }

    public function get(int $id) {
        if (isset(self::$listaMarcas[$id])) {
            return self::$listaMarcas[$id];
        } else {
            return new Marca("Desconocida", "Desconocido");
        }
    }

    public function update($marca) {
        foreach (self::$listaMarcas as $key => $value) {
            if ($value->marca === $marca->marca && $value->modelo === $marca->modelo) {
                self::$listaMarcas[$key] = $marca;
            }
        }
    }

    public function delete(int $id): bool {
        if (isset(self::$listaMarcas[$id])) {
            unset(self::$listaMarcas[$id]);
            return true;
        }
        return false;
    }

    public function getAll(): array {
        return self::$listaMarcas;
    }
}
?>
