<?php
class ControllerEmployee{
	static public function ctrAddEmployee($data){
	   	$answer = (new ModelEmployees)->mdlAddEmployee($data);
	}

	static public function ctrShowEmployeeList(){
		$answer = (new ModelEmployees)->mdlShowEmployeeList();
		return $answer;
	}



}

