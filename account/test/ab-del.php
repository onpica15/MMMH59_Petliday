<?php
require __DIR__ . '/../parts/config.php';
require __DIR__ . '/../parts/admin-required.php';

if (isset($_GET['sid'])) {
    $sid =  intval($_GET['sid']);
} else {
    header('Location: ab-list.php');
    exit;
}

$sql = "DELETE FROM `member_pet` WHERE sid=$sid";
$pdo->query($sql);

if (isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: ab-list.php');
}
