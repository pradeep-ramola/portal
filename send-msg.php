<?php
session_start();
include 'conn.php';	
    $to = $_GET['to'];
	$from = $_SESSION['login_user'];
	$msg = $_GET['msg'];
 
	 
	if (empty($msg)){   
 
		echo "You can not send empty message";
	}	
	else{
		
		$query = "INSERT INTO chat (sent_to,sent_from,message) VALUES ('$to', '$from','$msg')";
		$table =mysqli_query($conn,$query);
		if($table){
			echo "Message sent";
		}
		else{ 
			echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
		}
		mysqli_close($conn); // Closing Connection
	}
?>