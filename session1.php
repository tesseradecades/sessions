<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

function saveName(){

}

// Read the sessions
if ($_SESSION["username"] != "") {
	echo "<br>Hello ";
    echo $_SESSION["username"];
?>

<h1>Valid User</h1>
You are a valid user. Here is your reward!!!<br />

<img src="https://az616578.vo.msecnd.net/files/2015/09/27/635789781274697208191557841_tumblr_lxcavjCQC81qcj7k0o5_r1_250-1.gif">


<br /><br />
<form action="saveName.php" method="post">
	<label>Enter Your name below...</label>
	<input type="text" name="name" id="name" value=""/>
	<button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "submitName">Submit Name</button>
</form>

<br /><br />
<a href="clearsessions.php">Clear Sessions</a>


<br />
<a href="session2.php">Another page</a>



<?php  
}else{
?>

<h1>You are not a valid user</h1>
Police are coming
<img src="http://66.media.tumblr.com/tumblr_lne9okrwkN1qdvbl3o1_500.jpg"> <br />




	<?php
}
?>








</body>
</html>