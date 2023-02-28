<?php

require_once "connection.php";

class ModelEmployees{

    static public function mdlAddEmployee($data){
		$db = new Connection();
		$pdo = $db->connect();

        try{
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();

			if($data['department'] == 'CABACS'){
				$e_id = (new Connection)->connect()->prepare("SELECT CONCAT('CABACS', LPAD((count(id)+1),4,'0')) as gen_id  FROM employee FOR UPDATE");

			}elseif($data['department'] == 'COENG'){
				$e_id = (new Connection)->connect()->prepare("SELECT CONCAT('COENG', LPAD((count(id)+1),4,'0')) as gen_id  FROM employee FOR UPDATE");
	
			}elseif($data['department'] == 'COED'){
				$e_id = (new Connection)->connect()->prepare("SELECT CONCAT('COED', LPAD((count(id)+1),4,'0')) as gen_id  FROM employee FOR UPDATE");
	
			}elseif($data['department'] == 'CAS'){
				$e_id = (new Connection)->connect()->prepare("SELECT CONCAT('CAS', LPAD((count(id)+1),4,'0')) as gen_id  FROM employee FOR UPDATE");
	
			}elseif($data['department'] == 'CAMHS'){
				$e_id = (new Connection)->connect()->prepare("SELECT CONCAT('CAMHS', LPAD((count(id)+1),4,'0')) as gen_id  FROM employee FOR UPDATE");
	
			}elseif($data['department'] == 'CCJE'){
				$e_id = (new Connection)->connect()->prepare("SELECT CONCAT('CCJE', LPAD((count(id)+1),4,'0')) as gen_id  FROM employee FOR UPDATE");
	
			}
			

			$e_id->execute();
			$eid = $e_id -> fetchAll(PDO::FETCH_ASSOC);

			$m_initial = substr($data['mname'], 0,1);
			$full =  $data['fname']." ".$m_initial.". ".$data['lname'];
            $stmt = $pdo->prepare("INSERT INTO employee (empid, department, employeename, fname, mname, lname, designation, emptype, gender, dob, c_num, email, hdate,  address) 
            VALUES (:empid, :department, :employeename, :fname, :mname, :lname, :designation, :emptype, :gender, :dob, :c_num, :email, :hdate, :address)");

			$stmt->bindParam(":employeename", $full, PDO::PARAM_STR);
			$stmt->bindParam(":empid", $eid[0]['gen_id'], PDO::PARAM_STR);
			$stmt->bindParam(":fname", $data["fname"], PDO::PARAM_STR);
			$stmt->bindParam(":mname", $data["mname"], PDO::PARAM_STR);
			$stmt->bindParam(":lname", $data["lname"], PDO::PARAM_STR);
			$stmt->bindParam(":department", $data["department"], PDO::PARAM_STR);
			$stmt->bindParam(":designation", $data["designation"], PDO::PARAM_STR);
			$stmt->bindParam(":emptype", $data["emptype"], PDO::PARAM_STR);
			$stmt->bindParam(":c_num", $data["c_num"], PDO::PARAM_STR);
			$stmt->bindParam(":dob", $data["dob"], PDO::PARAM_STR);
			$stmt->bindParam(":gender", $data["gender"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
			$stmt->bindParam(":hdate", $data["hdate"], PDO::PARAM_STR);
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

	static public function mdlShowEmployeeList(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM employee");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
		
	}
	




}