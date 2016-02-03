<?php
	$doIndex = $_GET['do'];

	if ($doIndex=="mail"){
		$name = $_POST['name_field'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		//$utm_source = $_POST['utm_source'];
		//$utm_medium = $_POST['utm_medium'];
		$message = $message;//." ".$utm_source." ".$utm_medium;


		$to = 'exxxar@gmail.com';
		$subject = 'the subject';
		$message = 'FROM: '.$name.'Message: '.$message;
		$headers = 'From: exxxar@gmail.com';
		 
		mail($to, $subject, $message) or die('Error sending Mail'); //This method sends the mail.

		echo "send";
	}
	
	if ($doIndex=="add"){
		$_POST['itemId'];
		echo "3";
	}
	
	if ($doIndex=="remove"){
	
		echo "remove";
	}
	
	if ($doIndex=="getList"){
	
		echo "getList";
	}
	
	if ($doIndex=="bye"){
	
		echo "bye";
	}
	
	
	

?>