<?php
class Connector
{
    protected $conn; // 👈 Must be declared

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=carwash_db", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
        }
    }

}

class Connectors
{
    protected $conn;

    function __construct() {
        $host = "localhost";
        $dbname = "carwash_db"; // change this to your database
        $username = "root";     // adjust if needed
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
