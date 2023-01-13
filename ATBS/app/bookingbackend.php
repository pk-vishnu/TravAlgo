<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = 'ATBS';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$f =$_POST['flight'];
$d =$_POST['date'];
$t =$_POST['time'];
$n =$_POST['name'];

$sql = "insert into tickets (flight,date,time,name) values ('$f','$d','$t','$n')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header( "refresh:3;url=home.php" );
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();

?>
