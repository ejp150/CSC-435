<html>
<head>
<title>Thank You!</title>

<link href="heart.gif" type="image/gif" rel="shortcut icon" />
<link href="Geekluv.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php 
	include("common.php");
	topofpage();
?>

<h3> Thank You! </h3>

<div>
<p>
Welcome to NerdLuv, <?= $_POST["name"];?>! <br>
<br>
Now <a href="matches.php">log in to see your matches!</a>
</p>
</div>

<?php 
$singles = fopen("singles.txt", "a");
$txt = $_POST["name"] . "," . $_POST["gender"] . "," . $_POST["age"] . "," . $_POST["personality"] . "," . $_POST["os"] . "," . $_POST["min"] . "," . $_POST["maximum"] . "\r\n";

fwrite($singles, $txt);
fclose($singles);

	footer();
?>
</body>
</html>
