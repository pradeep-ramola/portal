<?php
	error_reporting(0);
	session_start();
	include 'conn.php';
	if (empty($_SESSION['login_user'])){
		header("location: home.php");
		exit();
	}
 
	if (isset($_GET['add-contact'])){
		if ($_GET['add-contact'] == 0){
				echo $_GET['user'];
			$add = "INSERT INTO `contact`(`user_id`, `contact_id`) VALUES (".$_SESSION['login_user'].",".$_GET['user'].")";
			$added = mysqli_query($conn,$add);
		}
		else{
			$add = "INSERT INTO `contact`(`user_id`, `contact_id`) VALUES (".$_SESSION['login_user'].",".$_GET['user'].")";
			$added = mysqli_query($conn,$add);
		}
	}
	if($_SESSION['login_user']=="13"){
		header("location: admin.php?user=".$_GET['user']);
	}
	header("location: profile.php?user=".$_GET['user']);
?>