<?php
class Database {
    private string $host = 'localhost';
    private string $db_name = 'mini_finance';
    private string $username = 'root';
    private string $password = '';
    private ?PDO $connection = null;

    public function connect(): PDO {
        if ($this->connection === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
                $this->connection = new PDO($dsn, $this->username, $this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->createTransactionsTable();

            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        return $this->connection;
    }

    private function createTransactionsTable(): void {
        $sql = "
            CREATE TABLE IF NOT EXISTS transactions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                type VARCHAR(20) NOT NULL,
                description VARCHAR(255) NOT NULL,
                amount DECIMAL(10,2) NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->connection->exec($sql);
    }
}

$db = new Database();
$pdo = $db->connect();
?>
