<?php

session_start();

?>

<!-- header here is modified from 'header.php' to include CKeditor -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Base</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- Added CKeditor source -->
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])){
						echo '
						<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '
						<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>
						';
					}
				?>
			</div>
		</div>
	</nav>
</header>

<?php
	if (isset($_SESSION['u_id'])){
		//Show editor
		echo '
		<form action="includes/submit.inc.php" method="POST">
			<input type="text" name="post_title" placeholder="Title">
			<textarea class="ckeditor" name="editor"></textarea>
			<button type="submit" name="submit">Save</button>
		</form>';
	} else {
		//Take unauthorized user back to index
		header("Location: index.php?login=false");
		exit();
	}
?>

<?php
	include_once 'footer.php';
?>