<?php
$conn = mysqli_connect("localhost", "root", "", "spims");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM  admin  WHERE User  ='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>


<head>
    <link rel="stylesheet" href="Res/Style/edit.css">

</head>

<body>
    <main>
        <h2>Edit</h2>
        <form method="POST" action="adminUpdate.php?id=<?php echo $id; ?>">

            <div>
                <label for="user"> User:</label></br>
                <input type="text" name="user" value="<?php echo $row['User']; ?>" id="user" required>
            </div>



            <div>
                </br><label for="pass"> Password </label></br>
                <input type="text" name="pass" id="pass" required value="<?php echo $row['Password']; ?>">
            </div>

            <input id="submitBtn" type="submit" name="submit">
            <a id="backBtn" href="Staff.php">Back</a>
        </form>
    </main>

</body>

</html>