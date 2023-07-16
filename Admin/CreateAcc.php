<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Res/Style/CreateAcc.css">

    <title>CREATE ACCOUNT</title>

</head>

<body>

    <?php
    include 'Navigation/nav.php'
    ?>






    <form method="POST" action="createdb.php">
        <div id="HeaderH1">
            <h1>Create Cashier Account </h1>
        </div>
        <div>
            <label for="user"> Username </label></br>
            <input type="text" name="user" id="user" required>
        </div>

        <div>
            <label for="fName"> First Name </label></br>
            <input type="text" name="fName" id="fName" required>
        </div>

        <div>
            <label for="mName"> Middle Name </label></br>
            <input type="text" name="mName" id="mName">
        </div>

        <div>
            <label for="lName"> Last Name </label></br>
            <input type="text" name="lName" id="lName" required>
        </div>

        <div>
            <label for="age"> Age </label></br>
            <input type="number" name="age" id="age" required>
        </div>

        <div>
            <label for="gender"> Gender </label></br>
            <input type="text" name="gender" id="gender" required>
        </div>

        <div>
            <label for="cnum"> Contact No. </label></br>
            <input type="number" name="cnum" id="cnum" required>
        </div>

        <div>
            <label for="pass"> Password </label></br>
            <input type="password" name="pass" id="pass" required>
        </div>



        <div class="submitButton" id="submitbtn">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>

    </form>

</body>

</html>