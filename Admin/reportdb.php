<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);

$stockout = "SELECT * FROM recordtbl WHERE job = 'Staff' AND category = 'Stockout'";
$stockin = "SELECT * FROM recordtbl WHERE job = 'Staff' AND category = 'Stockin'";

$result = mysqli_query($conn, $stockout);
$results = mysqli_query($conn, $stockin);
    ?>
