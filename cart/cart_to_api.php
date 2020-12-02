<?php
include __DIR__ . '/../parts/config.php';



if (isset($_POST['mainLastName'])) {
    $_SESSION['order'] = $_POST;
};
// if (isset($_SESSION['mainLastName'])) {
//     $_SESSION['order'] = $_POST;
// };


echo json_encode($_SESSION['order'], JSON_UNESCAPED_UNICODE);
// if (empty($_POST['order'])) {
//     echo json_encode('401', JSON_UNESCAPED_UNICODE), exit;
// }


// $mainLastName = isset($_POST['mainLastName']) ? $_POST['mainLastName'] : '1';
// $mainFirstName = isset($_POST['mainFirstName']) ? $_POST['mainFirstName'] : '1';
// $mainGender = isset($_POST['mainGender']) ? $_POST['mainGender'] : '1';
// $phone = isset($_POST['phone']) ? $_POST['phone'] : '1';
// $email = isset($_POST['email']) ? $_POST['email'] : '1';
// $coupon = isset($_POST['coupon']) ? $_POST['coupon'] : '1';



// // ---
// $_SESSION['order']['mainLastName'] = $mainLastName;
// $_SESSION['order']['mainFirstName'] = $mainFirstName;
// $_SESSION['order']['mainGender'] = $mainGender;
// $_SESSION['order']['phone'] = $phone;
// $_SESSION['order']['email'] = $email;
// $_SESSION['order']['coupon'] = $coupon;


// $output['order'] = $_SESSION['order'];
// echo json_encode($mainLastName, JSON_UNESCAPED_UNICODE);
