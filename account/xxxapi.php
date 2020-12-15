<?php

if($_SESSION['member_avatar']['name'] != ''){

    $_SESSION['member_avatar']['name'] = $_POST['name'];
}
echo 'success';