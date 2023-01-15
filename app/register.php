<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>TravAlgo Registration</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
	<body>

    <?php include("../includes/navbar1.php")?>




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
          <p style="color: hsl(217, 10%, 50.8%)">
            Travel + Algo = TravAlgo!
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="register1.php" method="post" autocomplete="off">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" placeholder="First Name" />

                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" placeholder="Last Name"/>

                    </div>
                  </div>
                </div>


                <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" placeholder="E-Mail" name="email"/>

                </div>


                <div class="form-outline mb-4">
                  <input type="username" id="username" class="form-control" placeholder="Username" name="username"/>
                </div>


                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" placeholder="Password" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">
                  Sign Up
                </button></div>
				<div>
				<a href="login.php">Already Have an account? Login!</a>
				</div>

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

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--
    <div class="register">
			<h1>Register</h1>
			<form action="register1.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<input type="submit" value="Register">
			</form>
		</div>-->
	</body>
</html>