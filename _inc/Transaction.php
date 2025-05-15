<?php
class Transaction {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllTransactions() {
        $query = "SELECT * FROM transactions ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTransaction($type, $description, $amount) {
        $query = "INSERT INTO transactions (type, description, amount) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$type, $description, $amount]);
    }

    public function getTransactionById($id) {
        $query = "SELECT * FROM transactions WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateTransaction($id, $type, $description, $amount) {
        $query = "UPDATE transactions SET type = ?, description = ?, amount = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$type, $description, $amount, $id]);
    }

    public function deleteTransaction($id) {
        $query = "DELETE FROM transactions WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }

    public function calculateRunningBalance() {
        $transactions = $this->getAllTransactions();
        $balance = 0;
    
        foreach (array_reverse($transactions) as $tx) {
            if ($tx['type'] === 'income') {
                $balance += $tx['amount'];
            } else {
                $balance -= $tx['amount'];
            }
        }
    
        return $balance;
    }
    
}
?>