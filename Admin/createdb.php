<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);

$user = $_POST['user'];
$fname = $_POST['fName'];
$mname = $_POST['mName'];
$lname = $_POST['lName'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$cnum = $_POST['cnum'];
$pass = $_POST['pass'];

$query = "INSERT INTO cashietbl (User,Fname,Mname, Lname, Age, Gender, Cnum,Password) VALUES ('$user','$fname','$mname','$lname', '$age', '$gender', '$cnum', '$pass')";

$insert = mysqli_query($conn, $query);
 
header('location: home.php');
