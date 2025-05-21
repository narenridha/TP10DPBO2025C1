<?php
require_once 'config/Database.php';

class Jadwal {
    private $conn;
    private $table = 'jadwal';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($jam_jadwal) {
        $query = "INSERT INTO " . $this->table . " (jam_jadwal) VALUES (:jam_jadwal)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':jam_jadwal', $jam_jadwal);
        return $stmt->execute();
    }

    public function update($id, $jam_jadwal) {
        $query = "UPDATE " . $this->table . " SET jam_jadwal = :jam_jadwal WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':jam_jadwal', $jam_jadwal);
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