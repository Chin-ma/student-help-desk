<?php

include 'config.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$querytext = trim($_POST['querytext']);

$sql = "INSERT INTO queries (name, subject, querytext, querytime) VALUES ('$name', '$subject', '$querytext', CURRENT_TIMESTAMP())";

if ($conn->query($sql) === TRUE) {
    echo 'Details added';
} 
else {
    echo 'Error'. $sql . 'br' . $conn->error;
}

header('Location: viewQuery.php');

?>