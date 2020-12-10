<?php
session_start();
// session_destroy();

unset($_SESSION['member_avatar']);
header('Location: /PETLIDAY/index/index＿.php');
?>

