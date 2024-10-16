<?php
interface RepoCrud {
    public function add($item);
    public function get(int $id);
    public function update($item);
    public function delete(int $id): bool;
    public function getAll(): array;
}
?>

