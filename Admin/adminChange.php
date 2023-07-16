<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <link rel="stylesheet" href="Res/Style/change.css">

</head>

<body>

    <?php
    include 'Admindb.php';
    include 'Navigation/nav.php';
    ?>

    <div class="container">
        <h1>Admin</h1>
        <div>
            <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    #echo"<tr><td>".$row["Fname"]."</td><td>".$row["Mname"]."</td><td>".$row["Lname"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Cnum"]."</td></tr>";

            ?>
                    <div>
                        <p>User: <?php echo $row['User']; ?></p>
                        <p>Password: <?php echo $row['Password']; ?></p>
                        <a href="adminEdit.php?id=<?php echo $row['User']; ?>">Edit</a>
                        <a href="adminDelete.php?id=<?php echo $row['User']; ?>">Delete</a>
                    </div>
            <?php
                }
                echo "</div>";
            } else {
                echo "<div><p>" . "0 result" . "</p></div>";
            }

            ?>
        </div>
    </div>

</body>

</html>