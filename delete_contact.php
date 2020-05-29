<?php
	$link = mysqli_connect("localhost", "root", "", "phonebook");
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$getid = $_GET['deleteid'];
	$query = "DELETE FROM add_contact WHERE id = '$getid'";
	$query_run = mysqli_query($link, $query);
	if($query_run){
		header('Location:index.php');
	}else{
		echo 'Error while deleting user record';
	}

?>