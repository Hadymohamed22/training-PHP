<?php
session_unset();
session_destroy();
setcookie("username", "", time() - 3600);
header("location: login.php");
exit;