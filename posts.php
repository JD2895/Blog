<?php
	session_start();
	include_once 'header.php';
	include_once './includes/dbblog.inc.php';
?>

<h1> Blog posts </h1>
<table style="border:2px solid; padding:10px;">
	<?php

		$sql = "SELECT post_id, uid, title, date_time FROM posts";
		$result = mysqli_query($conn, $sql);
		
		if ($result == 0){					
			echo 'no results';
			exit();
		}
		
		while($row = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td><?= $row['uid']; ?></td>
				<td><?= $row['title']; ?></td>
				<td><?= $row['date_time']; ?></td>
				<td><a href="<?= 'update.php?id='.$row['post_id'] ?>">Edit</a></td>
				<td><a href="<?= 'delete.php?id='.$row['post_id'] ?>">Delete</a></td>
			</tr>
		<?php 
		}
	?>
</table>

<?php
	include_once 'footer.php';
?>