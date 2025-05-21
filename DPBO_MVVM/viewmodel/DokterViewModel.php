<?php
require_once 'model/Dokter.php';
require_once 'model/Poli.php';
require_once 'model/Jadwal.php';

class DokterViewModel {
    private $dokter;
    private $poli;
    private $jadwal;

    public function __construct() {
        $this->dokter = new Dokter();
        $this->poli = new Poli();
        $this->jadwal = new Jadwal();
    }

    public function getDokterList() {
        return $this->dokter->getAll();
    }

    public function getDokterById($id) {
        return $this->dokter->getById($id);
    }

    public function getPolis() {
        return $this->poli->getAll();
    }

    public function getJadwals() {
        return $this->jadwal->getAll();
    }

    public function addDokter($name, $poli_id, $jadwal_id) {
        return $this->dokter->create($name, $poli_id, $jadwal_id);
    }

    public function updateDokter($id, $name, $poli_id, $jadwal_id) {
        return $this->dokter->update($id, $name, $poli_id, $jadwal_id);
    }

    public function deleteDokter($id) {
        return $this->dokter->delete($id);
    }
}
?>