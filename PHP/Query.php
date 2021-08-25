<?php

include 'Config.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$querytext = trim($_POST['querytext']);

$sql = "INSERT INTO queries (name, subject, querytext) VALUES ('$name', '$subject', '$querytext')";

if ($conn->query($sql) === TRUE) {
    echo 'Details added';
} 
else {
    echo 'Error'. $sql . 'br' . $conn->error;
}

$conn->close();
header('Location: ViewQuery.php');

?>