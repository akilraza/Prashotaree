<?php
include 'connect.php';
$FirstName =$_POST['FirstName'];
$LastName =$_POST['LastName'];
$Email =$_POST['Email'];
$ConfirmEmail =['ConfirmEmail'];
$DoB =['DoB'];
$Gander =['Gander'];
$SelectState =['SelectState'];
$Quiries =['Quiries'];
$Comment =['Comment'];
$AnyQuestion =['AnyQuestion'];

$sql = "insert into quizadminregistration(FirstName,LastName,Email,ConfirmEmail,DoB,Gander,SelectState,Quiries,Comment,AnyQuestion)
VALUES ('Akash', 'Kumar', 'abc@gmail.com', 'abc@gmail.com', '13/11/1998', 'male', 'bihar', '??????', '??????', 'Nooooo')";

if ($conn->query($sql) === TRUE) {
    echo "quiz master registration successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();