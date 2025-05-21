<?php
require_once 'model/Jadwal.php';

class JadwalViewModel {
    private $jadwal;

    public function __construct() {
        $this->jadwal = new Jadwal();
    }

    public function getJadwalList() {
        return $this->jadwal->getAll();
    }

    public function getJadwalById($id) {
        return $this->jadwal->getById($id);
    }

    public function addJadwal($jadwal_name) {
        return $this->jadwal->create($jadwal_name);
    }

    public function updateJadwal($id, $jadwal_name) {
        return $this->jadwal->update($id, $jadwal_name);
    }

    public function deleteJadwal($id) {
        return $this->jadwal->delete($id);
    }
}
?>