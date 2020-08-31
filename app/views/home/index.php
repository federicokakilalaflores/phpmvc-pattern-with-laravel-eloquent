<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body align="center">
	<h1>List of Users</h1>
	<table border="1" style="margin:auto; width:50%">
		<thead>	
			<tr>
				<th>ID</th>
				<th>FIRSTNAME</th>
				<th>LASTNAME</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach ($data as $user) :
		?>
			<tr align="center">
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['firstname']; ?></td>
				<td><?php echo $user['lastname']; ?></td>
			</tr>
		<?php
			endforeach;
		?>	
		</tbody>
	</table>
</body>
</html>