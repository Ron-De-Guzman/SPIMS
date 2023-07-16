<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);


$name = $_POST['prodName'];
$categ = $_POST['category'];
$astock = $_POST['availStks'];



#$minus = "SELECT * FROM inventory WHERE ProdName = $name,  AvailStocks - $astock";
#$minus = "INSERT INTO inventory (ProdName,Category,AvailStocks) VALUES ('$name','$categ', '$astock')";
#$minus ="UPDATE inventory SET AvailStocks = AvailStocks-". $_POST['availStks'] ;
#$result = mysqli_query($conn, $minus);
?>