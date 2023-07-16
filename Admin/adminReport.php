<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="Res/Style/reportlayout.css">
    <link rel="stylesheet" type="text/css" href="Res/Style/reporttabs.css">
</head>

<body>

    <?php
    include 'adminReportdb.php';
    include 'Navigation/nav.php';
    ?>


    <div class="tabContainer">
        <div class="buttonContainer">
            <button onclick="showPanel(0,'#D5AAFF')">Stock Out</button>
            <button onclick="showPanel(1,'#B2B2B2')">Stock In</button>



        </div>

        <div class="tabPanel">
            <h1>Records (Admin)</h1>

            <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    #echo"<tr><td>".$row["Fname"]."</td><td>".$row["Mname"]."</td><td>".$row["Lname"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Cnum"]."</td></tr>";
                    echo "<div class='stock'><p>User :" . $row["user"] . "</p>" . "<p>Product Name: " . $row["productName"] . "</p>" .
                        "<p>Quantity :" . $row["quantity"] . "</p>" . "<p>Value :" . $row["availStockValue"] . "</p>" . "<p>Date/Time :" . $row["date_time"] . "</p>";
            ?> <a href="printPage.php?id=<?php echo $row['date_time']; ?>">Print</a>
        </div>
<?php
                }

                echo "</div>";
            } else {
                echo "<p >" . "0 result" . "</p></div>";
            }


?>




<div class="tabPanel">
    <h1>Records (Admin)</h1>

    <?php


    if ($results->num_rows > 0) {

        while ($row = $results->fetch_assoc()) {

            #echo"<tr><td>".$row["Fname"]."</td><td>".$row["Mname"]."</td><td>".$row["Lname"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Cnum"]."</td></tr>";
            echo "<div class='stock'><p>User:" . $row["user"] . "</p>" . "<p>Product Name" . $row["productName"] . "</p>" .
                "<p>Quantity:" . $row["quantity"] . "</p>" . "<p>Value:" . $row["availStockValue"] . "</p>" . "<p>Date/Time:" . $row["date_time"] . "</p>";
    ?> <a href="printPage.php?id=<?php echo $row['date_time']; ?>">Print</a>
</div>
<?php

        }

        echo "</div>";
    } else {
        echo "<p >" . "0 result" . "</p>";
    }

?>

<script src="Res/Style/tabs.js"></script>
    </div>




</body>

</html>