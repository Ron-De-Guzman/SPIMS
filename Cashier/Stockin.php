<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Res/Style/CreateAcc.css">
    <title>Document</title>
</head>

<body>
    <?php
    include 'Navigation/nav.php';
    include 'Stockoutdb.php';
    ?>



    <div class="container">
        <form method="POST" action="stockindb.php">
            <div id="HeaderH1">
                <h1> Stock In (Cashier)</h1>
            </div>

            <div>
                <label for="prodName"> Product Name </label></br>
                <select name="prodName" id="prodName">

                    <?php
                    if ($insertCateg->num_rows > 0) {

                        while ($row = $insertCateg->fetch_assoc()) {

                            #echo "<option value =".$row["ProdName"].">".$row["ProdName"]."</option> ";
                            echo '<option value ="' . $row["ProdName"] . '">' . $row["ProdName"] . '</option> ';
                        }
                        echo "</select>";
                    } else {
                        echo "0 result";
                    }
                    ?>
                </select>
            </div>

            <div>
                <label for="userN"> User </label></br>
                <select name="userN" id="userN">

                    <?php
                    if ($insertUser->num_rows > 0) {

                        while ($row = $insertUser->fetch_assoc()) {

                            #echo "<option value =".$row["ProdName"].">".$row["ProdName"]."</option> ";
                            echo '<option value ="' . $row["User"] . '">' . $row["User"] . '</option> ';
                        }
                        echo "</select>";
                    } else {
                        echo "0 result";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="prodCat">Category</label></br>
                <select name="category" id="category">


                    <option value="Stockin">Stock In</option>
                </select>


            </div>

            <div>


                <div>
                    <label for="availStks"> Quantity </label></br>
                    <input type="text" name="availStks" id="availStks" required>
                </div>
                <div>
                    <label for="asVal"> Quantity Value </label></br>
                    <input type="text" name="asVal" id="asVal" required>
                </div>







                <div class="submitButton" id="submitbtn">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>


        </form>
    </div>
</body>

</html>