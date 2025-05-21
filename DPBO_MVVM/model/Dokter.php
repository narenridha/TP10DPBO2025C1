<?php
require_once 'config/Database.php';

class Dokter {
    private $conn;
    private $table = 'dokter';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Pastikan di database, tabel jadwal memiliki kolom 'jam_jadwal'.
    // Jika error Unknown column 'sh.jam_jadwal', cek struktur tabel jadwal di database Anda.
    // Jika masih 'shift_name', ubah menjadi 'jam_jadwal' agar sesuai dengan query ini.
    public function getAll() {
        $query = "SELECT s.*, d.nama_poli as nama_poli, sh.jam_jadwal as jam_jadwal 
                 FROM " . $this->table . " s 
                 JOIN poli d ON s.poli_id = d.id 
                 JOIN jadwal sh ON s.jadwal_id = sh.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT s.*, d.nama_poli as nama_poli, sh.jam_jadwal as jam_jadwal 
                 FROM " . $this->table . " s 
                 JOIN poli d ON s.poli_id = d.id 
                 JOIN jadwal sh ON s.jadwal_id = sh.id 
                 WHERE s.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama, $poli_id, $jadwal_id) {
        $query = "INSERT INTO " . $this->table . " (nama, poli_id, jadwal_id) VALUES (:nama, :poli_id, :jadwal_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':poli_id', $poli_id);
        $stmt->bindParam(':jadwal_id', $jadwal_id);
        return $stmt->execute();
    }

    public function update($id, $nama, $poli_id, $jadwal_id) {
        $query = "UPDATE " . $this->table . " SET nama = :nama, poli_id = :poli_id, jadwal_id = :jadwal_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':poli_id', $poli_id);
        $stmt->bindParam(':jadwal_id', $jadwal_id);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>