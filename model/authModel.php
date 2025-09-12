<?php

    class authModel {
        private $conn;
    
        function __construct() {
            $this->conn = new PDO("mysql:host=localhost;dbname=carwash_db", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    
        function getEmail($email) {
            $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            return $stmt->fetch(PDO::FETCH_ASSOC); // single row
        }

    }
    