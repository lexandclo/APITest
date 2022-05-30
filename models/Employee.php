<?php

class Employee {

    public function __construct($db){
        $this->conn = $db;
    }

    public function getoneEmployee($rfid){
        $sql = "SELECT *
            FROM employees
            WHERE :rfid = rfid_card_number
            ORDER BY full_name ASC";
        $this->conn->query($sql);
        $this->conn->bind('rfid', $rfid);
        $result = $this->conn->single();
        return $result;


    }        
}