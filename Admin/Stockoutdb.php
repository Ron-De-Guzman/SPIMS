<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);




$category = "SELECT ProdName FROM inventory  ";

$username= "SELECT User FROM cashietbl";

$adminUser= "SELECT User FROM admin";

$insertCateg = mysqli_query($conn, $category);
#$pencil = $conn-> query($allPencil) ;
$insertUser= mysqli_query($conn,$username);

$insertAdmin= mysqli_query($conn,$adminUser);


