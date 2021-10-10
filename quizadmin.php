<?php
include 'connect.php';
$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$address =$_POST['address'];
$address =$_POST['address'];
$city =$_POST['city'];
$selectstate =$_POST['selectstate'];
$postcode =$_POST['postcode'];
$country =$_POST['country'];
$phone =$_POST['phone'];
$comment =$_POST['comment'];


$sql = "insert into quizadminregistration(FirstName,LastName,Email,Address,City,State,PostCode,Country,Phone)
VALUES ('rohit', 'singh', 'rohit3@example.com', 'bhagwanpur', 'muzffarpur', 'bihar', '841215', 'india', '8789316572')";

if ($conn->query($sql) === TRUE) {
    echo "quizadmin registration successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();






