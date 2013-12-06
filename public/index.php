<?php
require '../vendor/autoload.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plask</title>
</head>
<body>
	<form action="submit.php" method="post">
		<fieldset>
			<legend>Fråga 1</legend>
			<label>
				<input type="radio" name="question1" value="alt1">Alternativ 1
			</label>
			<label>
				<input type="radio" name="question1" value="alt2">Alternativ 2
			</label>
			<label>
				<input type="radio" name="question1" value="alt3">Alternativ 3
			</label>
		</fieldset>
		<fieldset>
			<legend>Fråga 2</legend>
			<label>
				<input type="radio" name="question2" value="alt1">Alternativ 1
			</label>
			<label>
				<input type="radio" name="question2" value="alt2">Alternativ 2
			</label>
			<label>
				<input type="radio" name="question2" value="alt3">Alternativ 3
			</label>
		</fieldset>
		<input type="submit" value="Skicka" name="submit">
	</form>
</body>
</html>