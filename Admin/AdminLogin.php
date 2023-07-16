<?php require('session.php'); ?>
<?php if (logged_in()) { ?>
    <script type="text/javascript">
        window.location = "home.php";
    </script>

<?php
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Res/Style/Login.css">
    <script>
        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);

        window.onunload = function() {
            null
        };
    </script>
</head>

<body>
    <div id="bg">
        <div id="MainForm">
            <form method="POST" action="logindb.php">
                <div>
                    <h1>Owner Login</h1></br>
                    <label for="uName"> Username</label></br>
                    <input type="text" name="uName" id="uName" />
                </div>

                <div>
                    <label for="pass"> Password</label></br>
                    <input type="password" name="pass" id="pass" />
                </div>

                <div class="FormButton">
                    <button type="submit">Login</button>


                    <button type="reset">Reset</button>

                </div>
            </form>

        </div>



    </div>


</body>

</html>