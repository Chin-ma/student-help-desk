<?php

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "student_query";

$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
else {
    // echo 'Connected Successfully';
}

?>