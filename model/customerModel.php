<?php
require_once __DIR__ . '/db_connection.php';

class customerModel extends Connector
{
    function __construct()
    {
        parent::__construct();
    }

    function register($post)
    {
        $sql = "INSERT INTO `users`(`full_name`, `email`, `contact`, `password`) 
        VALUES (? ,? ,? ,?)";

        $query = $this->conn->prepare($sql);

        // hash the password before inserting
        $hashedPassword = password_hash($post['pass'], PASSWORD_DEFAULT);
        
        $query->bindValue(1, $post['fname']);
        $query->bindValue(2, $post['email']);
        $query->bindValue(3, $post['contact']);
        $query->bindValue(4, $hashedPassword);

        $query->execute();

        return $this->conn->lastInsertId();
    }

    function getEmail($email) {
        $sql = "SELECT email, password  FROM users WHERE email = ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetchall(PDO::FETCH_ASSOC); // single row
    }
}
