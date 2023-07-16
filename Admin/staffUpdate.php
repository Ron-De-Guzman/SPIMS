<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server, $username, $password, $db);
$id = $_GET['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$cnum = $_POST['cnum'];
$user = $_POST['user'];
$pass = $_POST['pass'];


mysqli_query($conn, "UPDATE cashietbl SET User = '$user', Password = '$pass', Cnum = '$cnum', Gender = '$gender', Mname='$mname', Lname = '$lname', Fname= '$fname'  WHERE User='$id'");
header('location:Staff.php');
