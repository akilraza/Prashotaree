<?php
include 'Connect.php';

$Name =$_POST['Name'];
$Email =$_POST['Email'];
$ReTypeEmail =$_POST['ReTypeEmail'];
$Gander =$_POST['Gander'];
$Address =$_POST['Address'];
$City =$_POST['City'];
$SelectState =$_POST['SelectState'];
$PostCode =$_POST['PostCode'];
$Country =$_POST['Country'];
$Phone =$_POST['Phone'];


$sql = "insert into quizadminregistration(Name,Email,ReTypeEmail,Gander,Address,City,Select State,PostCode,Country,Phone)
VALUES ('akilraza', 'abc@gmail.com', 'abc@gmail.com', 'male', 'juranchhapra', 'muzffarpur', 'bihar', '841278', 'india', '8789641221')";

if ($conn->query($sql) === TRUE) {
    echo "quiz participent registration successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();