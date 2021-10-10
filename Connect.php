<?php
$con = new mysqli('localhost','akil','akil','prashnotaree');

if($con->connect_error){
    die($con->connect_error);
}
echo "Connection successful!";