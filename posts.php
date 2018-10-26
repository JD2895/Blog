<?php
	session_start();
	include_once 'header.php';
?>

<h1> Blog posts </h1>
<table style="border:2px solid;">
	<?php
		include_once '/includes/dbblog.inc.php';
		$sql = "SELECT (title, date_time, uid) FROM posts LIMIT 3;";
		$result = mysqli_query($conn, $sql);
		
		if ($resultCheck == 0){					
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