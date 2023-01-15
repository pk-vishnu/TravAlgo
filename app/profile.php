<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ATBS';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>TravAlgo Profile</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
	<body class="loggedin">

	<?php include("../includes/navbar.php")?>
    <section id="hero">
	<div class="container">
		<nav class="navtop">
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p><h2>Your account details are below:</h2></p>
			
				<table>

					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	<br><br><br><br>
		<button onclick="myFunction()">Secret Phrase (._.)</button> </b> Warning! Do Not Leak! </b>

<div id="paraphrase">
tennis lend hello doctor market segment now already adjust later example mix undo civil slight network dragon link thing adult guard hurdle dress absorb normal
<div class="w-25 p-1" style="background-color: #eee;"><img src="../images/profile.jpg" class="img-rounded" alt="Cinque Terre"/></div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("paraphrase");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
	
	
	
	
	
	</div>







<section id="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1>TEAM REAL - #VINNOVATEIT</h1>
        <p>All rights reserved to Team Real. Copyright 2023</p>
      </div>
    </div>
  </div>
</section>     
	</body>
</html>