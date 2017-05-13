<?php

include( '../connect.inc.php');

		$first_name = $_POST['fn'];
		$last_name = $_POST['ln'];
		$gender = $_POST['selectbasic'];
		$email= $_POST['email'];
		$phone_number= $_POST['phone_number'];
		
	 try
	 {
		$prep_req = $db->prepare("INSERT INTO actor VALUES(null, '$first_name', '$last_name', '$email', '$phone_number', '$gender')");
		$prep_req->execute();
		echo "Actor inserted successfully to the u956372823_dev database on Hostinger ";
		
		$prep_req->closeCursor();
		$db = null;
	}
	 
	 catch(Exception $e)
	 {
		echo "Failed:" . $e->getMessage();
	 }



?>