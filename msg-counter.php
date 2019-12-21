<?php
	include 'conn.php';
	include 'login.php';
 
	$query = "call msg_counter(".$_SESSION['login_user'].")";
	$table = mysqli_query($conn,$query);
	if($table){
		echo $rows=mysqli_num_rows($table);
	}
?>