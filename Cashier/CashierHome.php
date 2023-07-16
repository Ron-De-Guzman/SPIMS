<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Res/Style/Dashboard.css">
    <script>
        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);

        window.onunload = function() {
            null
        };
    </script>
    <title>Home</title>
</head>

<body>
    <?php
    include 'Navigation/nav.php';
    include 'homedb.php';
    ?>

    <div class="container">
        <main>
            <h1 class="title">Dashboard</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Dashboard</a></li>
            </ul>
            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <?php
                            echo "<h2>$totalProducts->num_rows</h2>";

                            ?>
                            <p>Total Products</p>
                        </div>
                        <i class='bx bx-trending-up icon'></i>
                    </div>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <?php
                            echo "<h2>$lowStockProducts->num_rows</h2>";

                            ?>
                            <p>Low Stock Products</p>
                        </div>
                        <i class='bx bx-trending-down icon down'></i>
                    </div>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <?php
                            echo "<h2>$outOfStockProduct->num_rows</h2>";
                            ?>
                            <p>Out of Stock Products</p>
                        </div>
                        <i class='bx bx-trending-down icon down'></i>
                    </div>
                </div>

            </div>
            <div class="data">
                <div class="content-data">
                    <div class="head">

                        <h3>Zero Stock Products</h3>
                        <div class="menu">
                            <i class='bx bx-dots-horizontal-rounded icon'></i>
                            <ul class="menu-link">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Save</a></li>
                                <li><a href="#">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <td>
                            <table class="list" id="storeList">
                                <thead>
                                    <tr>

                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    if ($ZeroProducts->num_rows > 0) {

                                        while ($row = $ZeroProducts->fetch_assoc()) {

                                            echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["PurPrice"] . "</td></tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "<tr><td>" . "0 result" . "</td><td>" . "0 result" . "</td>" . "<td>" . "0 result" . "</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </td>
                    </div>

                </div>
                <div class="content-data">
                    <div class="head">
                        <h3>Low Stock Products </h3>
                        <div class="menu">
                            <i class='bx bx-dots-horizontal-rounded icon'></i>
                            <ul class="menu-link">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Save</a></li>
                                <li><a href="#">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <td>
                            <table class="list" id="storeList">
                                <thead>
                                    <tr>

                                        <th>Product Name</th>
                                        <th>Ideal Stock</th>
                                        <th>Available Stock</th>
                                        <th>Purchase Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($lowZeroProducts->num_rows > 0) {

                                        while ($row = $lowZeroProducts->fetch_assoc()) {

                                            echo "<tr><td>" . $row["ProdName"] . "</td><td>" . $row["IdealStocks"] . "</td><td>" . $row["AvailStocks"] . "</td><td>" . $row["PurPrice"] . "</td></tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "<tr><td>" . "0 result" . "</td><td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </td>
                    </div>

                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>