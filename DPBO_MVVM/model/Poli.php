<?php
require_once 'config/Database.php';

class poli {
    private $conn;
    private $table = 'poli';

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

    public function create($nama_poli) {
        $query = "INSERT INTO " . $this->table . " (nama_poli) VALUES (:nama_poli)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_poli', $nama_poli);
        return $stmt->execute();
    }

    public function update($id, $nama_poli) {
        $query = "UPDATE " . $this->table . " SET nama_poli = :nama_poli WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_poli', $nama_poli);
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