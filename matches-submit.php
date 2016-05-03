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

$singles = fopen("singles.txt", "r"); 

$matches = array();
$i = 0;
while(!feof($singles)) {
	$lines = fgets($singles);
	$matches[$i] = explode(',', $lines);
	$i++;
}

fclose("singles.txt");
?>

<div class="match">
<p><img src="user.png" alt="Cool Pic" width="150px"> First Last</p>
<ul>
	<list><strong>gender:</strong> F</list><br>
	<list><strong>age:</strong> 4</list><br>
	<list><strong>type:</strong> UIOE</list><br>
	<list><strong>OS:</strong> Linux</list><br>
</ul>
</div>

<?php 
	footer();
?>

</body>
</html>
