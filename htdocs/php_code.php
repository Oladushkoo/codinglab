<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'crud');

	// initialize variables
	$name = "";
	$text = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$text = $_POST['text'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$text')");
		$_SESSION['message'] = "Address saved";
		header('location: index.php');
	}
