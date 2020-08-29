<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<h1>Home Views Content</h1>
	<?php
		if(count($data) > 0){
			echo "<p>Welcome " . $data['name'] . " Age of " . $data['age'] . "</p>";
		}
	?>
</body>
</html>