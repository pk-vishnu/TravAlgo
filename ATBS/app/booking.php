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
		<title>ATBS TICKET BOOKING</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../css/" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>


	<body class="loggedin">
		<?php include("../includes/navbar.php")?>

<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col">
		<br><br>
        <h1>Ticket Booking</h1>
        <p></p>
		<br>
      </div>

        <div class="form-outline mb-4">
			<form class="form-card" action="booking1.php" method="POST">
                <label class="form-label" for="form5Example1" for="flights">Choose a flight:</label>
                    <select name="flight" id="flight">
                        <optgroup label="Available Flights">
                            <option value="f1">F1A</option>
                            <option value="f2">F2A</option>
                            <option value="f3">F3A</option>
                        </optgroup>
                    </select><br>
                <label for="date">Date of Journey:</label>
                    <input type="date" id="date" name="date"><br>
                <label for="time">Choose time:</label>
                    <select name="time" id="time">
                        <optgroup label="Available Times">
                            <option value="9:00">9:00</option>
                            <option value="12:00">12:00</option>
                            <option value="7:00">7:00</option>
                        </optgroup>
                    </select><br>
                    <label for="name">Name:</label>
                        <input type="text" id="name" name="name"><br><br>
                    
                    
                <input type="submit" value="Book" class="btn btn-primary btn-block mb-3" color="683aa4">

			</form>
		</div>
        
	</body>
</html>