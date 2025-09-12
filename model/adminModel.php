<?php

//import database
require_once 'db_connection.php';

//class
class adminModel extends Connectors
{
    function __construct()
    {
        parent::__construct();
    }

    function getBooking()
    {
    //getl the carousel featured destination
        $sql = "SELECT * FROM appointments WHERE appointment_id = '0' ORDER BY id DESC";
        
        $query = $this->conn->prepare($sql); //prepare the query
        $query->execute(); //run the query
        
        return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
        
    }
}
