<?php
session_unset();
unset($_SESSION['login']);
session_destroy();
header("Location: login.php");
?>