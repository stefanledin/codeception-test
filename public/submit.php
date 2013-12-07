<?php 
if (isset($_POST['submit'])) {
	require '../vendor/autoload.php';
	$questions = new \app\questions\Questions;
	unset($_POST['submit']);
	$valid = $questions->validate($_POST);
	if (!$valid) header('Location: http://localhost:8888/codeception/public/index.php');
	$rightAnswers = $questions->countRightAnswers($_POST);
}
?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?php echo $rightAnswers;?> rätt</h1>
</body>
</html>