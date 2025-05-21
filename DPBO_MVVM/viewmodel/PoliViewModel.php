<?php
require_once 'model/Poli.php';

class PoliViewModel {
    private $poli;

    public function __construct() {
        $this->poli = new poli();
    }

    public function getPoliList() {
        return $this->poli->getAll();
    }

    public function getPoliById($id) {
        return $this->poli->getById($id);
    }

    public function addPoli($name) {
        return $this->poli->create($name);
    }

    public function updatePoli($id, $name) {
        return $this->poli->update($id, $name);
    }

    public function deletePoli($id) {
        return $this->poli->delete($id);
    }
}
?>