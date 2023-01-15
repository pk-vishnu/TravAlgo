<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TravAlgo Home</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
	</head>


	<body class="loggedin">
		<?php include("../includes/navbar.php") ?>

<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col">
		<br><br>
        <h1>Welcome back <?=$_SESSION['name']?>!</h1>
        <p>Book travel tickets using next generation Algorand Blockchain Integration</p>

      </div>
      <div class="col img-col">
        <img src="../images/finallogo1.png" class="img-fluid" alt="Software Development" height="50" width="50">
      </div>
    </div>
    <div class="row cards">

      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <img src="../images/nft.png" class="icon" alt="Service One" height="60" width="60"/>
            <h5 class="card-title">Non-Fungible Token Tickets?!</h5>
            <p class="card-text">Travel Tickets tied to a Non-Fungible Token for several amazing benefits!</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <img src="../images/leaf.png"" class="icon" alt="Service Two" height="60" width="60"/>
            <h5 class="card-title">Sustainable Travel</h5>
            <p class="card-text">Algorand Blockhain integrated with the TravAlgo booking system build towards a sustainable eco-friendly system!</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <img src="../images/flight.png" class="icon" alt="Service Three" height="60" width="60"/>
            <h5 class="card-title">Security</h5>
            <p class="card-text">A completely fraud-free and secure travel ticketing system.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


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