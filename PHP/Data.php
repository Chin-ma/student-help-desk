<?php

include 'Config.php';

$stud_name = $_POST('studname');
$username = $_POST('username');
$email = $_POST('email');
$password = $_POST('password');

$sql = "INSERT INTO student_query (studname, username, email, password) VALUES ('$stud_name', '$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo 'Details added';
} 
else {
    echo 'Error'. $sql . 'br' . $conn->error;
}

$conn->close();

?>