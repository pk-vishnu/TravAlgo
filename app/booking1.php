<?php
  ini_set("display_errors", "1");
  error_reporting(E_ALL);

session_start();
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = 'ATBS';

$command = escapeshellcmd('/home/vishnupk/miniconda3/bin/python3 /opt/lampp/htdocs/ATBS/nftalgofinal/main.py');
$output = shell_exec($command);
$g = $output;




$f=$_POST['flight'];
$d=$_POST['date'];
$t=$_POST['time'];
$n=$_POST['name'];

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "insert into tickets (Flight,Date,Time,PassengerName,nfttoken) values ('$f','$d','$t','$n','$g')";


if ($con->query($sql) === TRUE) {
    echo "Ticket Booked Successfully! Redirecting.....";
    header( "refresh:3;url=home.php" );
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();


function get_data()
{
    $connect = mysqli_connect("localhost","root","","ATBS");
    $query = "SELECT ID from tickets";
    $result = mysqli_query($connect, $query);
    $ticket_data=array();
    while($row = mysqli_fetch_array($result))
    {
        $ticket_data[] = array(
            'id'=>$row["ID"]
        );
    }

    return json_encode(end(($ticket_data)));
}


?>
