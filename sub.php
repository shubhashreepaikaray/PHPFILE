<?php
$district = $_POST['district'];

include("connect.php");

$sql = "INSERT INTO district (`district_name`) 
    VALUES ('$district')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "$district<br>";
    header("Location: district-view.php");
    echo "success sign";
} else {
    echo "failed sign";
}
