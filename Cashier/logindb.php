<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server, $username, $password, $db);



$user = $_POST['uName'];
$password = $_POST['pass'];

$query = "SELECT * FROM cashietbl WHERE User='$user' AND Password='$password'";

$insert = mysqli_query($conn, $query);
//echo mysqli_num_rows($insert);



if (mysqli_num_rows($insert) === 1) {

    header("location:CashierHome.php");
} else {
    header("location:CashierLogin.php");
}
