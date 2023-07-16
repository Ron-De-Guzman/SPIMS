<?php
$conn = mysqli_connect("localhost", "root", "", "spims");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM  inventory  WHERE ProdName  ='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Res/Style/edit.css">
</head>

<body>
    <main>
        <h2>Edit</h2>
        <form method="POST" action="updatedb.php?id=<?php echo $id; ?>">

            <div>
                <label for="prodName"> Product Name </label></br>
                <input type="text" name="prodName" value="<?php echo $row['ProdName']; ?>" id="prodName" required>
            </div>

            <div>
                <label for="prodCat"> Product Category</label></br>
                <select name="Category" id="Category" required>

                    <option value="Ballpen">Ballpen</option>
                    <option value="BondPaper">Bond Paper</option>
                    <option value="Notebook">Notebook</option>
                    <option value="Pencil">Pencil</option>
                    <option value="Paper">Paper</option>
                    <option value="Eraser">Eraser</option>
                    <option value="Folder">Folder</option>
                    <option value="Envelope">Envelope</option>
                    <option value="Tapes">Tapes</option>
                    <option value="Board">Board</option>
                    <option value="ColoringMaterials">Coloring Materials</option>
                </select>
            </div>

            <div>
                </br><label for="purPrice"> Purchase Price </label></br>
                <input type="text" name="purPrice" id="purPrice" required value="<?php echo $row['PurPrice']; ?>">
            </div>
            <div>
                <label for="retPrice"> Retail Price </label></br>
                <input type="text" name="retPrice" id="retPrice" required value="<?php echo $row['RetailPrice']; ?>">
            </div>

            <div>
                <label for="idlStks"> Ideal Stocks </label></br>
                <input type="number" name="idlStks" id="idlStks" required value="<?php echo $row['IdealStocks']; ?>">
            </div>

            <div>
                <label for="availStks"> Available Stocks </label></br>
                <input type="text" name="availStks" id="availStks" required value="<?php echo $row['AvailStocks']; ?>">
            </div>

            <div>
                <label for="asVal"> Available Stocks Value </label></br>
                <input type="number" name="asVal" id="asVal" required value="<?php echo $row['AvailStockVal']; ?>">
            </div>
            <input id="submitBtn" type="submit" name="submit">
            <a id="backBtn" href="tabs.php">Back</a>
        </form>
    </main>

</body>

</html>