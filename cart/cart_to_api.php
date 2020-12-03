<?php
include __DIR__ . '/../parts/config.php';



if (isset($_POST['mainLastName'])) {
    $_SESSION['order'] = $_POST;
};
$output = [];



// echo json_encode($_SESSION['order'], JSON_UNESCAPED_UNICODE);
// if (empty($_POST['order'])) {
//     echo json_encode('401', JSON_UNESCAPED_UNICODE), exit;
// }


$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : 'error';
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : 'error';
$mainGender = isset($_POST['idCard']) ? $_POST['idCard'] : 'error';
$petName = isset($_POST['petName']) ? $_POST['petName'] : 'error';
$petSize = isset($_POST['petSize']) ? $_POST['petSize'] : 'error';
$notes = isset($_POST['notes']) ? $_POST['notes'] : 'error';



// // ---
if (isset($_SESSION['cart']['sid'])) {
    $_SESSION['order']['sid']['lastName'] = $mainLastName;
    $_SESSION['order']['sid']['mainFirstName'] = $mainFirstName;
    $_SESSION['order']['sid']['firstName'] = $mainGender;
    $_SESSION['order']['sid']['idCard'] = $phone;
    $_SESSION['order']['sid']['petName'] = $email;
    $_SESSION['order']['sid']['petSize'] = $coupon;
    $_SESSION['order']['sid']['notes'] = $coupon;
}

$output['order'] = $_SESSION['order'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
// $output['order'] = $_SESSION['order'];
// echo json_encode($mainLastName, JSON_UNESCAPED_UNICODE);
