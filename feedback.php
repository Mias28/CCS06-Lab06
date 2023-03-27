<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
</head>
<body>
	<h1>Feedback Form</h1>
	<form method="post" action="thankyou.php">
		<label for="complete_name">Name:</label>
		<input type="text" id="complete_name" name="complete_name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="types">Type:</label>
		<input list="types" name="type" id="type">
  		<datalist id="types">
    	<option value="Inquiry">
    	<option value="Feedback">
    	<option value="Other">
  		</datalist><br><br>

		<label for="satisfaction_level">Level of satisfaction (0 to 10):</label>
  		<input type="range" id="satisfaction_level" name="satisfaction_level" min="0" max="10"><br><br>

		<label for="message">message:</label><br>
		<textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>
		
		<input type="submit" value="Submit">
	</form>
</body>
</html>
