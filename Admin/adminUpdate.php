
    <?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "spims";

    $conn = mysqli_connect($server, $username, $password, $db);
    $id = $_GET['id'];


    $user = $_POST['user'];
    $pass = $_POST['pass'];


    mysqli_query($conn, "UPDATE admin SET User = '$user', Password = '$pass'  WHERE User='$id'");
    header('location:adminChange.php');

    ?>