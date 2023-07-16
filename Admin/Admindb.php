<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server, $username, $password, $db);

$profile = "SELECT * FROM admin ";
$result = $conn->query($profile);
