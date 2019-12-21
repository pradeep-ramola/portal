<?php
	error_reporting(0);
	include 'conn.php';

	if(isset($_GET['username'])){
		$query = "select * from user where user_name='".$_GET['username']."'";
		$table = mysqli_query($conn, $query);
		if($table){
			$rows=mysqli_num_rows($table);
			if($rows == 1){
				echo "Username already exist.";
			}
			else{
				echo "Username Available";
			}
		}
	}
?>