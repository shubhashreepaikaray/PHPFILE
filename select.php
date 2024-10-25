<?php
$district = $_POST['district'];
$block = $_POST['block'];

include("connect.php");

if ($district != '' && $block != '') {

    $sql = "INSERT INTO blocks (`district`,`block_name`) 
    VALUES ('$district','$block')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "$district<br>";
        // echo "$block<br>";
        header("Location: block-view.php");
        echo "success sign";
    } else {
        echo "failed sign";
    }
} else {
    $msg = "all fields are mandotory";
    header("Location: block.php?msg=" . urlencode($msg));
    exit();
}
