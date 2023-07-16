<?php
$conn = mysqli_connect("localhost", "root", "", "spims");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM  recordtbl  WHERE date_time ='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
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
        <p>Product Name: <?php echo $row['productName'];  ?></p>
        <p>Product Quantity: <?php echo $row['quantity']; ?></p>
        <p>Quantity Value: <?php echo $row['availStockValue']; ?></p>
        <p>Category: <?php echo $row['category']; ?></p>
        <p>Date & Time: <?php echo $row['date_time']; ?></p>
        <p>User: <?php echo $row['user']; ?></p>

        <button onClick="window.print()">Print this page
        </button>

        <a href="report.php">Back</a>
    </main>




</body>

</html>