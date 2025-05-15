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
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        return $this->connection;
    }
}

$db = new Database();
$pdo = $db->connect();
?>
