<?php
class ControllerStudent{
	static public function ctrAddStudent($data){
	   	$answer = (new ModelStudents)->mdlAddStudent($data);
	}

	static public function ctrShowStudentList(){
		$answer = (new ModelStudents)->mdlShowStudentList();
		return $answer;
	}



}

