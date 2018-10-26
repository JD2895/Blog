<?php
	session_start();
	include_once 'header.php';
	include_once './includes/dbblog.inc.php';
?>

<h1> Blog posts </h1>
<table style="border:2px solid;">
	<?php

		$sql = "SELECT (uid, title, date_time) FROM posts";
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