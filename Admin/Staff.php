<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Profile</title>
    <link rel="stylesheet" href="Res/Style/staff.css">
</head>

<body>

    <?php
    include 'Staffdb.php';
    include 'Navigation/nav.php';
    ?>

    <div class="container">
        <h1>Staff Profile</h1>
        <div>
            <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    #echo"<tr><td>".$row["Fname"]."</td><td>".$row["Mname"]."</td><td>".$row["Lname"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Cnum"]."</td></tr>";
                    echo "<div class='profiles'><p>First Name:" . $row["Fname"] . "</p>" . "<p>Middle Name:" . $row["Mname"] . "</p>" .
                        "<p>Last Name:" . $row["Lname"] . "<p>User Name:" . $row["User"] . "</p>" . "</p>" . "<p>Age:" . $row["Age"] . "</p>" . "<p>Gender:" . $row["Gender"] . "</p>" . "<p>Contact Number:" . $row["Cnum"] . "</p>";
            ?>
                    <a href="staffEdit.php?id=<?php echo $row['User']; ?>">Edit</a>
                    <a href="staffDelete.php?id=<?php echo $row['User']; ?>">Delete</a>
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