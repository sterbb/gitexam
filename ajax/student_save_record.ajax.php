<?php
require_once "../controllers/student.controller.php";
require_once "../models/student.model.php";


class saveStudent{
  public $sID;
  public $fname;
  public $mname;
  public $lname;
  public $section;
  public $e_num;
  public $address;
  public $status;
  public $gender;
  public $dob;
  public $course;
  public $email;
  public $c_num;

  public function saveStudentRecord(){
    $sID =   $this->sID;
    $fname =   $this->fname;
    $mname =   $this->mname;
    $lname =   $this->lname;
    $section =   $this->section;
    $e_num =   $this->e_num;
    $address =   $this->address;
    $status =   $this->status;
    $gender =   $this->gender;
    $dob =   $this->dob;
    $course =   $this->course;
    $email =   $this->email;
    $c_num =   $this->c_num;


    $data = array(
                  "sID"=>$sID,
                  "fname"=>$fname,
                  "mname"=>$mname,
                  "lname"=>$lname,
                  "section"=>$section,
                  "e_num"=>$e_num,
                  "status"=>$status,
                  "dob"=>$dob,
                  "gender"=>$gender,
                  "email"=>$email,
                  "course"=>$course,
                  "c_num"=>$c_num,
                  "address"=>$address);
      $answer = (new ControllerStudent)->ctrAddStudent($data);

  }
}

$save_student = new saveStudent();

$save_student -> sID = $_POST["sID"];
$save_student -> fname = ucwords($_POST["fname"]);
$save_student -> mname = ucwords($_POST["mname"]);
$save_student -> lname = ucwords($_POST["lname"]);
$save_student -> dob = $_POST["dob"];
$save_student -> gender = $_POST["gender"];
$save_student -> email = $_POST["email"];
$save_student -> address = $_POST["address"];
$save_student -> section = $_POST["section"];
$save_student -> e_num = $_POST["e_num"];
$save_student -> c_num = $_POST["c_num"];
$save_student -> course = $_POST["course"];
$save_student -> status = $_POST["status"];
$save_student -> saveStudentRecord();