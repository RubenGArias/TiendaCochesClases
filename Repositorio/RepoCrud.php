<?php
interface RepoCrud {
    public function add($item);
    public function findById($id);
    public function update($item);
    public function delete(int $id): bool;
    public function getAll(): array;
}
?>

