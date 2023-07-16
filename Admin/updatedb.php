<?php
	
$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);
	$id=$_GET['id'];
 
	$name = $_POST['prodName'];
    $categ = $_POST['Category'];
    $pprice = $_POST['purPrice'];
    $rprice = $_POST['retPrice'];
    $istock = $_POST['idlStks'];
    $astock = $_POST['availStks'];
    $val = $_POST['asVal'];

	mysqli_query($conn,"UPDATE inventory SET ProdName = '$name', Category = '$categ', PurPrice = '$pprice', RetailPrice = '$rprice', IdealStocks='$istock', AvailStocks = '$astock', AvailStockVal= '$val'  WHERE ProdName='$id'");
	header('location:tabs.php');
