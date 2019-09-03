
<?php include ('conn.php');
      include ('connection.php');
      


 ?>


 

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="poststyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<center><h1> MAKE A POST </h1>
	<form method="post" action="conn.php">

		<td>TITLE</td>
		<input type="text" name="title"> <br> <br>

		<td>DISCRIPTION</td>
		<textarea name="discription"> </textarea><br> <br>

		<a href="post.php"><input type="submit" name="post"></a><br> <br>
		
	</form></center>

</body>
</html>

<?php
session_start();

if (isset($_SESSION['Username'])) {

	


	echo "<br><a href='post.php'><input type=button name=back value=back></a>";
}
else{
	echo "<script>location.href='login.php'</script>";
}
?>