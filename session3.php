<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Read the sessions
if ($_SESSION["username"] != "") {
	echo "<br>Hello ";
    echo $_SESSION["username"];
?>

Welcome <?php echo $_SESSION["name"]; ?><br>

<img src="magic-blacksmith-15511-1920x1080.JPG">


<br /><br />
<a href="clearsessions.php">Clear Sessions</a>

<br />
<a href="session1.php">Page 1</a>
<br />
<a href="session2.php">Page 2</a>



<?php  
}else{
?>

<h1>You are not a valid user</h1>
Police are coming
<img src="http://66.media.tumblr.com/tumblr_lne9okrwkN1qdvbl3o1_500.jpg"> <br />




	<?php
}
?>