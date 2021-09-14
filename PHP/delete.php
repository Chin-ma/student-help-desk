<?php 

include 'config.php';
if (count($_POST)>0) {
    $sql = mysqli_query($conn, "DELETE FROM queries WHERE id='" . $_POST['id'] . "'");
}
header('Location: adminQuerylist.php');
?>