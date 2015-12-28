
<?php

session_start();

session_destroy();

echo "<script>window.open('main_login.php','_self')</script>";


?>