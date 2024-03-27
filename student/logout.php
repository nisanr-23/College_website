<?php
session_start();
session_destroy();
header("location:login-std.php");
exit();
?>