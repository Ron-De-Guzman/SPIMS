<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);

$stockout = "SELECT * FROM recordtbl WHERE job = 'Admin' AND category = 'Stockout'";
$stockin = "SELECT * FROM recordtbl WHERE job = 'Admin' AND category = 'Stockin'";

$result = mysqli_query($conn, $stockout);
$results = mysqli_query($conn, $stockin);
    ?>
