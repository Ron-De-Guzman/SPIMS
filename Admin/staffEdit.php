<?php
$conn = mysqli_connect("localhost", "root", "", "spims");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM  cashietbl  WHERE User  ='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>


<head>
    <link rel="stylesheet" href="Res/Style/edit.css">
</head>

<body>
    <main>
        <h2>Edit</h2>
        <form method="POST" action="staffUpdate.php?id=<?php echo $id; ?>">

            <div>
                <label for="fname"> First Name </label></br>
                <input type="text" name="fname" value="<?php echo $row['Fname']; ?>" id="fname" required>
            </div>



            <div>
                </br><label for="mname"> Middle Name </label></br>
                <input type="text" name="mname" id="mname" required value="<?php echo $row['Mname']; ?>">
            </div>
            <div>
                <label for="lname"> Last Name </label></br>
                <input type="text" name="lname" id="lname" required value="<?php echo $row['Lname']; ?>">
            </div>



            <div>
                <label for="gender"> Gender </label></br>
                <input type="text" name="gender" id="gender" required value="<?php echo $row['Gender']; ?>">
            </div>

            <div>
                <label for="cnum"> Contact Number </label></br>
                <input type="number" name="cnum" id="cnum" required value="<?php echo $row['Cnum']; ?>">
            </div>
            <div>
                <label for="user"> User </label></br>
                <input type="text" name="user" id="user" required value="<?php echo $row['User']; ?>">
            </div>
            <div>
                <label for="pass"> Password </label></br>
                <input type="text" name="pass" id="pass" required value="<?php echo $row['Password']; ?>">
            </div>
            <input id="submitBtn" type="submit" name="submit">
            <a id="backBtn" href="Staff.php">Back</a>
        </form>
    </main>

</body>

</html>