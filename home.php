<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" type="images/png" href="images/logo.png">
	<!--<link rel="stylesheet" type="text/css" href="css/materialize.min.css">-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	<div class="container center-align">
      <h2 class="red-text ">Welcome, <?php echo $_SESSION['username']; ?></h2>
      <a href="logout.php" class="btn-large"> Logout</a>
      </div>
</body>
</html>