<?php
include 'Connect.php';

// $cid = $_POST['cid'];
// $name = $_POST['name'];
// $dob = $_POST['dob'];
// $gander =$_Post['gander'];
// $mobile =$post['mobile'];

$cid = 'C001';
$name = 'Akil Raza';
$dob = '1999-02-03';
$gander ='M';
$mobile ='5698456987';


$sql ="insert into candidate values('$cid','$name','$dob','$gander','$mobile')";

if($con->query($sql)=== TRUE){
    echo "candidate created!";
}
else{
    echo $con->error;

}