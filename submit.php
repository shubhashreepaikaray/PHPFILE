<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phoneNumber = $_POST['phone'];
$address = $_POST['address'];
$district = $_POST['district'];
$block = $_POST['block'];
$gender = $_POST['gender'];

include("connect.php");

if ($name != '' && $mail  != '' && $phoneNumber != '' && $address != '' && $district != '' && $block != '' && $gender != '') {

    $sql = "INSERT INTO person (`name`, `mail`, `phone`, `address`,`district`,`block`,`gender`) 
    VALUES ('$name', '$mail','$phoneNumber','$address','$district','$block','$gender')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "$name<br>";
        // echo "$mail<br>";
        // echo "$phoneNumber<br>";
        // echo "$address<br>";
        // echo "$district<br>";
        // echo "$block<br>";
        // echo "$gender<br>";
        header("Location: view.php");
        echo "success sign";
    } else {
        echo "failed sign";
    }
} else {

    $msg = "all fields are mandotory";
    header("Location: register.php?msg=" . urlencode($msg));
    exit();
}