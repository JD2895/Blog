<?php
	session_start();
	include_once 'header.php';
?>

<h1> Blog posts </h1>
<table style="border:2px solid;">
	<?php
		$dbServername = "localhost";
		$dbUsername = "phpmyadmin";
		$dbPassword = "phpmyadmin";
		$dbName = "blog";

		$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		//Setting session time-zone to Toronto

		$sql = "SET SESSION time_zone = '-4:00'";
		$result = mysqli_query($conn, $sql);

		$sql = "SELECT * FROM posts";
		$result = mysqli_query($conn, $sql);
		
		if ($result == 0){					
			echo 'no results';
			exit();
		}
		
		while($row = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td><?php echo $row['uid']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['date_time']; ?></td>
			</tr>
		<?php 
		}
	?>
</table>

<?php
	include_once 'footer.php';
?>