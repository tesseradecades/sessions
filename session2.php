<?php
// Start the session
session_start();
$name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Read the sessions
if ($_SESSION["username"] != "") {
	echo "<h1>Hello ";
    echo $_SESSION["username"];
	echo "<h2> ";
?>
	...but your name is <?php echo $name; ?><br>
	<br /><br />
	<a href="clearsessions.php">Clear Sessions</a>


	<br />
	<a href="session1.php">First page</a><br />
	<a href="session3.php">Another page</a>
<?php
}else{
?>

	You are not a valid user


	<?php
}
?>




</body>
</html>