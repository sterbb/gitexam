<?php 

require_once "controllers/student.controller.php";
require_once "controllers/employee.controller.php";
require_once "controllers/template.controller.php";

require_once "models/student.model.php";
require_once "models/employee.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();