<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);

$name = $_POST['prodName'];
$categ = $_POST['Category'];
$pprice = $_POST['purPrice'];
$rprice = $_POST['retPrice'];
$istock = $_POST['idlStks'];
$astock = $_POST['availStks'];
$val = $_POST['asVal'];


$query = "INSERT INTO inventory (ProdName,Category,PurPrice, RetailPrice, IdealStocks, AvailStocks, AvailStockVal) VALUES ('$name','$categ','$pprice','$rprice', '$istock', '$astock', '$val')";

$insert = mysqli_query($conn, $query);
 
header('location: home.php');
