<?php

session_start();

//Check if 'submit' from previous page
if (isset($_POST['submit'])){
	include_once 'dbblog.inc.php';
	$uid = mysqli_real_escape_string($conn, $_SESSION['u_id']);
	$text = mysqli_real_escape_string($conn, $_POST['editor']);
	$title = mysqli_real_escape_string($conn, $_POST['post_title']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($text)) {
		header("Location: ../editor.php?editor=empty");
		exit();
	} else {
		//Insert the user into the database
		
		//TODO: Change uid to user's actual name
		$sql = "INSERT INTO posts (uid, date_time, content, title) VALUES ('$uid', now(),'$text', '$title');";
		$result = mysqli_query($conn, $sql);
		header("Location: ../editor.php?submit=success");
		exit();
	}
} else {
	header("Location: ../editor.php?submit=error");
	exit();
}

?>