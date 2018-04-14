<?php
$_SESSION["name"] = $_POST["name"];
?>
<html>
<body>

Welcome <?php echo $_SESSION["name"]; ?><br>
<a href="session2.php">Another page</a>
</body>
</html>