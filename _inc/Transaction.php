<?php
class Transaction {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Получить все транзакции
    public function getAllTransactions() {
        $query = "SELECT * FROM transactions ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Добавить новую транзакцию
    public function addTransaction($type, $description, $amount) {
        $query = "INSERT INTO transactions (type, description, amount) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$type, $description, $amount]);
    }

    // Получить транзакцию по ID
    public function getTransactionById($id) {
        $query = "SELECT * FROM transactions WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Обновить транзакцию
    public function updateTransaction($id, $type, $description, $amount) {
        $query = "UPDATE transactions SET type = ?, description = ?, amount = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$type, $description, $amount, $id]);
    }

    // Удалить транзакцию
    public function deleteTransaction($id) {
        $query = "DELETE FROM transactions WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>