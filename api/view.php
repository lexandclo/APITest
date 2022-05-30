<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/db.php';
    include_once '../models/Employee.php';
    include_once '../models/Department.php';

    $database = new Database();
   

    $employee = new Employee($database);
    $department = new Department($database);

    $rfid = isset($_GET['cn']) ? $_GET['cn'] : die();


    $rfid_employee = $employee->getoneEmployee($rfid);

    if(!empty($rfid_employee)) {
        $departments = $department->getdeptbyEmployeeId($rfid_employee->id);
        $emp_arr =[
            'rfid' => $rfid,
            'full_name' => $rfid_employee->full_name,
            'department' => $departments
        ];
        
            http_response_code(200);
            echo json_encode($emp_arr);
        } else {

            http_response_code(404);
            echo json_encode("Employee not found.");
        }
?>