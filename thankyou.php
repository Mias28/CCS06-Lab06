<!DOCTYPE html>
<html>
<head>
	<title>Feedback Result</title>
</head>
<body>
	<h1>THANK YOU!</h1>
	<?php
		$complete_name = $_POST['complete_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$satisfaction_level = $_POST['satisfaction_level'];
		$types = $_POST['type'];

		echo "<p>Recieved $types message from $complete_name , $email.</p>";
		echo $message;
		echo "<p>Satisfaction level: </p>" , $satisfaction_level;

	?>
</body>
</html>
