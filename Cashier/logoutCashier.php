<?php

session_start();

// 2. Unset all the session variables
unset($_SESSION['uName']);
unset($_SESSION['pass']);

?>
<script type="text/javascript">
    window.location = "../index.php";
</script>