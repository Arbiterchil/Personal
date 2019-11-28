<?php 
require_once "db.php";

if (isset($_POST["action"]) && $_POST["action"] == "save_data") {
	$json = array();
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	
	$sql = "INSERT INTO tbl_student(fname,mname,lname,gender)VALUES('$fname','$mname','$lname','$gender')";
	if ($db->query($sql) === true) {
		$json["error"] = 0;
	}else{
		$json["error"] = 1;
	}
	echo json_encode($json);
}

 ?>