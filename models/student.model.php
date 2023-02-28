<?php

require_once "connection.php";

class ModelStudents{

    static public function mdlAddStudent($data){
		$db = new Connection();
		$pdo = $db->connect();

        try{
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();

			if($data['status'] == 'Regular'){
				$s_id = (new Connection)->connect()->prepare("SELECT CONCAT('R', LPAD((count(id)+1),4,'0')) as gen_id  FROM student FOR UPDATE");

			}elseif($data['status'] == 'Irregular'){
				$s_id = (new Connection)->connect()->prepare("SELECT CONCAT('I', LPAD((count(id)+1),4,'0')) as gen_id  FROM student FOR UPDATE");
	
			}elseif($data['status'] == 'Transferee'){
				$s_id = (new Connection)->connect()->prepare("SELECT CONCAT('T', LPAD((count(id)+1),4,'0')) as gen_id  FROM student FOR UPDATE");
	
			}elseif($data['status'] == 'Returnee'){
				$s_id = (new Connection)->connect()->prepare("SELECT CONCAT('RE', LPAD((count(id)+1),4,'0')) as gen_id  FROM student FOR UPDATE");
	
			}
			

			$s_id->execute();
			$sid = $s_id -> fetchAll(PDO::FETCH_ASSOC);

			$m_initial = substr($data['mname'], 0,1);
			$full =  $data['fname']." ".$m_initial.". ".$data['lname'];
            $stmt = $pdo->prepare("INSERT INTO student (studentid, stats, studentname, fname, mname, lname, course, section, gender, dob, c_num, email, e_num,  address) 
            VALUES (:studentid, :stats, :studentname, :fname, :mname, :lname, :course, :section, :gender, :dob, :c_num, :email, :e_num,  :address)");

			$stmt->bindParam(":studentname", $full, PDO::PARAM_STR);
			$stmt->bindParam(":studentid", $sid[0]['gen_id'], PDO::PARAM_STR);
			$stmt->bindParam(":fname", $data["fname"], PDO::PARAM_STR);
			$stmt->bindParam(":mname", $data["mname"], PDO::PARAM_STR);
			$stmt->bindParam(":lname", $data["lname"], PDO::PARAM_STR);
			$stmt->bindParam(":stats", $data["status"], PDO::PARAM_STR);
			$stmt->bindParam(":course", $data["course"], PDO::PARAM_STR);
			$stmt->bindParam(":section", $data["section"], PDO::PARAM_STR);
			$stmt->bindParam(":c_num", $data["c_num"], PDO::PARAM_STR);
			$stmt->bindParam(":dob", $data["dob"], PDO::PARAM_STR);
			$stmt->bindParam(":gender", $data["gender"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
			$stmt->bindParam(":e_num", $data["e_num"], PDO::PARAM_STR);
			$stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);



			$stmt->execute();			

		    $pdo->commit();
		    return "ok";
		}catch (Exception $e){
			$pdo->rollBack();
			return "error";
		}	
		$pdo = null;	
		$stmt = null;
	}

	static public function mdlShowStudentList(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM student" );
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
		
	}
	




}