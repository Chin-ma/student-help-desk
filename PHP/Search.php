<?php

include 'Config.php';

$search = $_POST['search'];
$sql = "SELECT * FROM queries WHERE subject LIKE '%$search%'";
$result = mysqli_query($conn, $sql);

?>