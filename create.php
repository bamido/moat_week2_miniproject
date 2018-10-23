<?php
	// connect to database
	include("config.php");

	// function to trim and htmspecialchars input
	function test_input($data){
		$data = trim($data);
		$data = addslashes($data);
		$data = htmlspecialchars($data);

		return $data;		
	}


	if($_SERVER['REQUEST_METHOD']=='POST'){

		$lastname = test_input($_POST['lastname']);
		$firstname = test_input($_POST['firstname']);
		$nickname = test_input($_POST['nickname']);
		$phonenumber = test_input($_POST['phonenumber']);
		$emailaddress = test_input($_POST['emailaddress']);
		$contactaddress = test_input($_POST['contactaddress']);
		$meetat = test_input($_POST['meetat']);

		// save the data into profile table
		$sql = "INSERT INTO profile(lastname, firstname, nickname, phonenumber, emailaddress, contactaddress, meetat) VALUES('$lastname', '$firstname', '$nickname', '$phonenumber', '$emailaddress', '$contactaddress', '$meetat')";

		if(!mysqli_query($con, $sql)){
			$feedback = array("msg"=> "Error, Unable to add contact!". mysqli_error($con), "msgstatus"=> 0);
		}else{
			$feedback = array("msg"=> "Success, Contact added successfuly!", "msgstatus"=> 1);
		}


	}else{

		$feedback = array("msg"=> "Error, Request method not accepted!", "msgstatus"=> 2);
	}

	// output header
	header("Content-type: application/json");
	echo json_encode($feedback);


?>