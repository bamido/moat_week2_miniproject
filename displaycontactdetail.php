<?php
	// connect to database
	include("config.php");


	if($_SERVER['REQUEST_METHOD']=='GET'){

		$profileid = $_GET['id'];

		$sql = "SELECT * FROM profile WHERE profileid='$profileid' ";
		$result = mysqli_query($con, $sql);

		$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

		$feedback = array("msg"=>$output, "msgstatus"=> 1);



	}else{

		$feedback = array("msg"=> "Error, Request method not accepted!", "msgstatus"=> 2);
	}

	// output header
	header("Content-type: application/json");
	echo json_encode($feedback);
?>