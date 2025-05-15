<?php
session_start();

class Auth {
    private string $name;
    private string $email;
    private string $password;

    public function __construct(array $postData) {
        $this->name = $postData['name'] ?? '';
        $this->email = $postData['email'] ?? '';
        $this->password = $postData['password'] ?? '';
    }

    public function handleRequest(): void {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!empty($this->email) && !empty($this->password)) {
                $_SESSION['user'] = [
                    'name' => $this->name ?: 'User',
                    'email' => $this->email,
                ];
                $_SESSION['message'] = "Welcome back, " . htmlspecialchars($this->name) . "!";
            } else {
                $_SESSION['error'] = "Please enter both email and password.";
            }
            $this->redirect();
        }
    }

    private function redirect(): void {
        header("Location: ../index.php");
        exit();
    }
}

$auth = new Auth($_POST);
$auth->handleRequest();


