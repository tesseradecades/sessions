<?php
$_SESSION["name"] = $_POST["name"];
?>
<html>
<body>

Welcome <?php echo $_SESSION["name"]; ?><br>
</body>
</html>