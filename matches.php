<html>
<head>
<title>Find Matches</title>

<link href="heart.gif" type="image/gif" rel="shortcut icon" />
<link href="Geekluv.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php 
	include("common.php");
	topofpage();
?>
<fieldset>
	<legend>
		Returning User:
	</legend>

	<form action="matches-submit.php" method="get">
		<strong>Name: </strong> <input type="text" name="name" size="16">
		<br><br>
		<input type="submit" value="View My Matches">
	</form>
</fieldset>

<?php 
	footer();
?>

</body>
</html>