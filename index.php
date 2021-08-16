<?php
	//echo "Hello world!";
	include 'title.php';
	$name = "Silvana";
	$surname = "Pop";
	$birthYear = 1998;
?>

<!DOCTYPE html>
<html>
	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Surname</th>
				<th>Year of birth</th>
			</tr>
			<tr>
				<td><?php echo $name ?></td>
				<td><?php echo $surname ?></td>
				<td><?php echo $birthYear ?></td>
			</tr>
		</table>
	</body>
</html>
