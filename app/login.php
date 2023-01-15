<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TravAlgo Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/login.css">	
		
	</head>
	<body background-color="a9a9a9">

		<?php include("../includes/navbar1.php")?>
<br>
<!--
	<div class="container-sm">
		<div class="login" class="form-outline mb-4">
		
			<form action="authenticate.php" method="post">
			<label class="form-label" for="form5Example1" for="username">Username
				</label><br>
				<input class="form-control" type="text" name="username" placeholder="Username" id="username" required>
			<label class="form-label" for="form5Example1" for="password">Password
				</label>
				<br>
				<input class="form-control" type="password" name="password" placeholder="Password" id="password" required><br><br>
				<input class="btn btn-primary btn-lg btn-block" type="submit" value="Login">
			</form>
			<br><br>
			<a href="register.php">First time? Register here</a>
		</div>
	</div>
-->
<br>
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Ticket Booking <br />
            <span class="text-primary"><h2>Powered by Alogrand Blockchain</h2></span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">Travel + Algo = TravAlgo!
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="authenticate.php" method="post">
                <div class="form-outline mb-4">

                  <input type="username" id="username" placeholder="Username" class="form-control"  name="username" id="username"/>
                  <label class="form-label" for="form3Example4"></label>
                </div>


                <div class="form-outline mb-4">
                  <input type="password" id="password" placeholder="Password" name="password" class="form-control" id="password" />
                  <label class="form-label" for="form3Example4"></label>
                </div>


				<div class='text-center'>
                <button type="submit" class="btn btn-primary btn-lg">
                  Sign In
                </button></div><br>
				<div>
				<a href="register.php">New? Register! </a>
				</div>
              </form>
            </div>
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