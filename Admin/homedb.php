<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);

$totalProductsQuery = "SELECT * FROM inventory";
$totalProducts = mysqli_query($conn, $totalProductsQuery);

$lowStockProductsQuery = "SELECT * FROM inventory WHERE AvailStocks < 6 AND AvailStocks > 0";
$lowStockProducts = mysqli_query($conn, $lowStockProductsQuery);

$outOfStockProductQuery = "SELECT * FROM inventory WHERE AvailStocks = 0";
$outOfStockProduct = mysqli_query($conn, $outOfStockProductQuery);

$mostStockProductQuery = "SELECT * FROM inventory WHERE AvailStocks = ( SELECT MAX(AvailStocks) FROM inventory )";
$mostStockProduct = mysqli_query($conn, $mostStockProductQuery);
$mostStockProduct = $mostStockProduct->fetch_assoc();
$mostStockProduct = ucfirst($mostStockProduct['ProdName']);


/*$recentPurchaseData = array();
$recentPurchaseQuery = "SELECT * FROM inventory ORDER BY PurchasedAt DESC LIMIT 10";
$recentPurchase = mysqli_query($conn, $recentPurchaseQuery);*/

$recentPurchaseData = array();
$recentPurchaseQuery = "SELECT * FROM recordtbl WHERE category = 'Stockin' ORDER BY date_time DESC LIMIT 10";
$recentPurchase = mysqli_query($conn, $recentPurchaseQuery);



$lowZeroProductsQuery = "SELECT * FROM inventory WHERE AvailStocks < 6 OR AvailStocks = 0";
$lowZeroProducts = mysqli_query($conn, $lowZeroProductsQuery);


while ($row = mysqli_fetch_object($recentPurchase)) {
    array_push($recentPurchaseData, $row);
}




