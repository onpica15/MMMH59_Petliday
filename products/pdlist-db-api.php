<?php include __DIR__ . '/../parts/config.php' ?>
<?php
if (!isset($_SESSION['pd_pg'])) {
    $_SESSION['pd_pg'] = [];
}

$output = [];

$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
?>