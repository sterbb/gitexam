<?php
require_once "../controllers/employee.controller.php";
require_once "../models/employee.model.php";


class saveEmployee{
  public $empid;
  public $fname;
  public $mname;
  public $lname;
  public $department;
  public $designation;
  public $address;
  public $emptype;
  public $gender;
  public $dob;
  public $hdate;
  public $email;
  public $c_num;

  public function saveEmployeeRecord(){
    $empid =   $this->empid;
    $fname =   $this->fname;
    $mname =   $this->mname;
    $lname =   $this->lname;
    $department =   $this->department;
    $designation =   $this->designation;
    $address =   $this->address;
    $hdate =   $this->hdate;
    $gender =   $this->gender;
    $dob =   $this->dob;
    $emptype =   $this->emptype;
    $email =   $this->email;
    $c_num =   $this->c_num;


    $data = array(
                  "empid"=>$empid,
                  "fname"=>$fname,
                  "mname"=>$mname,
                  "lname"=>$lname,
                  "department"=>$department,
                  "designation"=>$designation,
                  "hdate"=>$hdate,
                  "dob"=>$dob,
                  "gender"=>$gender,
                  "email"=>$email,
                  "emptype"=>$emptype,
                  "c_num"=>$c_num,
                  "address"=>$address);
      $answer = (new ControllerEmployee)->ctrAddEmployee($data);

  }
}

$save_employee = new saveEmployee();

$save_employee -> empid = $_POST["empid"];
$save_employee -> fname = ucwords($_POST["fname"]);
$save_employee -> mname = ucwords($_POST["mname"]);
$save_employee -> lname = ucwords($_POST["lname"]);
$save_employee -> dob = $_POST["dob"];
$save_employee -> gender = $_POST["gender"];
$save_employee -> email = $_POST["email"];
$save_employee -> address = $_POST["address"];
$save_employee -> department = $_POST["department"];
$save_employee -> designation = $_POST["designation"];
$save_employee -> c_num = $_POST["c_num"];
$save_employee -> emptype = $_POST["emptype"];
$save_employee -> hdate = $_POST["hdate"];
$save_employee -> saveEmployeeRecord();