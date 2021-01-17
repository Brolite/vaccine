<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $family = $_POST['family'];
    $country = $_POST['country'];
    $district = $_POST['district'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `users` (`name`,`address`,`state`,`pincode`,`phone`,`family`,`country`,`district`,`email`) VALUES ('$name','$address','$state','$pincode','$phone','$family','$country','$district','$email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:lol.php');
    } else {
        echo '<strong> Sorry! </strong> Not Register </div>';
    }
}
