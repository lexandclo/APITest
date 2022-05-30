<?php

class Department {

    private $db;

    public function __construct() {
        $this->conn = new Database();
    }


    public function getdeptbyEmployeeId($id) {
        $sql = "SELECT name
            FROM departments
            LEFT JOIN employee_department
            ON id = department_id
            WHERE :employeeId = employee_id
            ORDER BY  name ASC";
        $this->conn->query($sql);
        $this->conn->bind('employeeId', $id);
        $results = $this->conn->resultSet();
        if(!empty($results)) {
            $results = array_map([$this, 'arrayDeps'], $results);
            return $results;
        } else {
            return [];
        }
    }

    protected function arrayDeps($sqlObj)
    {
        return $sqlObj->name;
    }
}