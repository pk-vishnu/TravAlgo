<?php
  ini_set("display_errors", "1");
  error_reporting(E_ALL);

include("mytickets1.php")
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
    <?php include("../includes/navbar.php")?>
    <section id="hero">
  <div class="container">
    <div class="row">
      <div class="col">
		<br><br>
        <h1>My Tickets</h1>
        <p>Book travel tickets using next generation Algorand Blockchain Integration</p>
		<br>
      </div>
    
	<div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Ticket ID</th>
         <th>Flight</th>
         <th>Date</th>
         <th>Time</th>
         <th>Passenger Name</th>
         <th>NFT Trans ID</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['ID']-1??''; ?></td>
      <td><?php echo $data['Flight']??''; ?></td>
      <td><?php echo $data['Date']??''; ?></td>
      <td><?php echo $data['Time']??''; ?></td>
      <td><?php echo $data['PassengerName']??''; ?></td>
      <td><a class="link-dark" href="https://testnet.algoexplorer.io/tx/<?php echo $data['nfttoken']??'';?>"><div class="w-25 p-3" style="background-color: white;"><img src="../images/plane.jpg" height="100"><br><?php echo $data['nfttoken']??'';?></a></div></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
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