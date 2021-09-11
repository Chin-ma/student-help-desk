<?php 

include_once 'config.php';
if (count($_POST)>0) {
	mysqli_query($conn, "UPDATE queries SET reply='" . $_POST['reply'] . "' WHERE id='" . $_POST['id'] . "'");
}
header('Location: adminQueryList.php');
?>