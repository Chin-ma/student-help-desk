<?php

include 'config.php';
$adminname = $_POST['adminname'];
$adminpass = $_POST['adminpass'];

$adminname = stripcslashes($adminname);
$adminpass = stripcslashes($adminpass);
$adminname = mysqli_real_escape_string($conn, $adminname);
$adminpass = mysqli_real_escape_string($conn, $adminpass);

$sql = "SELECT * FROM adminlogin WHERE adminname = '$adminname' AND adminpass = '$adminpass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header('Location: adminQueryList.php');
} else {
    header('Location: adminPage.php');
}


?>