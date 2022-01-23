<?php
class Database {
    private $host = "mysql";
    private $db_name = "tutoring";
    private $username = "tutoring";
    private $password = "garnichts";
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "connection error: " . $e->getMessage();
        }

        return $this->conn;
    }
}
