<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<a href="posts.php">Posts</a>
		<?php
			if (isset($_SESSION['u_id'])){
				echo "<h3>You are logged in<h3>";
				echo '<a href="editor.php">Editor</a>';
			}
		
		?>
		</div>
</section>

<?php
	include_once 'footer.php';
?>