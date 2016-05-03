<!DOCTYPE html>
<html>

<head>
<title>GeekLuv Signup</title>

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
		New User Signup:
	</legend>

	<form action="signup-submit.php" method="post">
		<strong>Name:</strong> 				<input type="text" name="name" size="16"> <br>
		<strong>Gender:</strong>			<input type="radio" name="gender" value="M">Male <input type="radio" name="gender" value="F">Female <br>
		<strong>Age:</strong>				<input type="text" name="age" size="6"><br>
		<strong>Personality Type:</strong> 	<input type="text" name="personality" size="6"> <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a><br>
		<strong>Favorite OS:</strong>		<select name="os">
 												<option value="Windows">Windows</option>
  												<option value="Mac OS X">Mac OS X</option>
  												<option value="Linux">Linux</option>
					  						</select> <br>
		<strong>Seeking Age:</strong>		<input type="text" name="min" value="min" size="6"> to <input type="text" name="maximum" value="max" size="6"> <br>
		<input type="submit" value="Sign Up">
</fieldset>


<?php 
	footer();
?>
</body>
</html>