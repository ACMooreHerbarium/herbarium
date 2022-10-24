<?php

// Get the search variable from URL
  $FirstName = $_POST['first'];
  $LastName = $_POST['last'];
  $Street = $_POST['street'];
  $City = $_POST['city'];
  $State = $_POST['state'];
  $Zip = $_POST['zip'];
  $Email = $_POST['email'];
  $Confirm = $_POST['confirm'];
  $Delivery = $_POST['delivery'];
  
// connect to your database ** EDIT REQUIRED HERE **
$con=mysqli_connect("localhost","mailuser","n3wAdre$", "mailinglist"); //(host, username, password, database)

// add escape string to prevent sql injection
$FirstName = mysqli_real_escape_string($con,$FirstName);
$LastName = mysqli_real_escape_string($con,$LastName);
$Street = mysqli_real_escape_string($con,$Street);
$City = mysqli_real_escape_string($con,$City);
$State = mysqli_real_escape_string($con,$State);
$Zip = mysqli_real_escape_string($con,$Zip);
$Email = mysqli_real_escape_string($con,$Email);
$Confirm = mysqli_real_escape_string($con,$Confirm);
$Delivery = mysqli_real_escape_string($con,$Delivery);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// insert form data
$sql="INSERT INTO recipients (FirstName, LastName, Street, City, State, Zip, eMail, eMailConfirm, delivery) VALUES ('$FirstName','$LastName','$Street','$City','$State','$Zip','$Email','$Confirm','$Delivery')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo 'Your information has been successfully added to our mailing list.  Publication of the Florascope is made possible by the Wade T. Batson
Endowment for the A. C. Moore Herbarium.  Please consider making a contribution today. <a href="givenow.php">Give now!</a>';

mysqli_close($con);
?> 