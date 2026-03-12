<?php
class Database {

    private $host = "127.0.0.1";
    private $db   = "animew";
    private $user = "root";
    private $pass = "";
    private $conn;

    public function getConnection() {

        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db,
                $this->user,
                $this->pass
            );
            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>