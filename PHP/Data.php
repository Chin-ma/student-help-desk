<?php

include 'config.php';

$studname = $_POST['stud_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO student_query (stud_name, username, email, password) VALUES ('$studname', '$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo 'Details added';
} 
else {
    echo 'Error'. $sql . 'br' . $conn->error;
}

$conn->close();
header('Location: login.php');

?>