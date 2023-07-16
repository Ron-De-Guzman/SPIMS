<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server, $username, $password, $db);

$name = $_POST['prodName'];
$categ = $_POST['category'];
$astock = $_POST['availStks'];
$user = $_POST['userN'];
$avalue = $_POST['asVal'];

$job = "Admin";


$query = "INSERT INTO recordtbl (productName,category,quantity,user,availStockValue,job) VALUES ('$name','$categ', '$astock', '$user','$avalue','$job')";
#$minus = "UPDATE inventory SET AvailStocks = AvailStocks- ".$_POST['availStks']." WHERE ProdName = ".$_POST['prodName']."" ;
$minus = "UPDATE inventory SET AvailStockVal=AvailStockVal-'$avalue' , AvailStocks=AvailStocks-'$astock' WHERE ProdName= '$name'";



$insert = mysqli_query($conn, $query);


$decrease = mysqli_query($conn, $minus);


date_default_timezone_set('Asia/Manila');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
            margin: auto;
            border: 1px solid black;
            width: 400px;
            height: 500px;
            border-radius: 20px;
            margin-top: 100px;
            background-color: white;
            color: black;
            padding: 10px 10px;



        }

        button,
        a {
            text-decoration: none;
            border: 1px solid black;
            color: black;
            font-size: 15px;
            padding: 4px 3px;
            background-color: gray;
        }

        button:hover,
        a:hover {

            border: 0px solid black;
            color: white;
            font-size: 15px;
            padding: 4px 3px;
            background-color: black;
        }
    </style>
</head>

<body>
    <main>
        <h1>Report</h1>
        <p>Product Name: <?php echo "$name"; ?></p>
        <p>Product Quantity: <?php echo "$astock"; ?></p>
        <p>Quantity Value: <?php echo "$avalue"; ?></p>
        <p>Category: <?php echo "$categ"; ?></p>
        <p>Date & Time: <?php echo date("Y - m - d / l") . "  |  ";
                        echo date("H:i:sa") ?></p>
        <p>User: <?php echo "$user" ?></p>

        <button onClick="window.print()">Print this page
        </button>
        <a href="Stockout.php">Back</a>
    </main>

</body>

</html>