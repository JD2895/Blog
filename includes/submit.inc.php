<?php

session_start();

if (isset($_POST['submit'])){
	include_once 'dbblog.inc.php';
	$uid = mysqli_real_escape_string($conn, $_SESSION['u_id']);
	$text = mysqli_real_escape_string($conn, $_POST['editor']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($text)) {
		header("Location: ../editor.php?editor=empty");
		exit();
	} else {
		//Insert the user into the database
		$sql = "INSERT INTO posts (uid, content) VALUES ('$uid', '$text');";
		$result = mysqli_query($conn, $sql);
		header("Location: ../editor.php?submit=success");
		exit();
	}
	
	
} else {
	header("Location: ../editor.php?submit=error");
	exit();
}

?>