<?php 

include_once 'Config.php';
if (count($_POST)>0) {
	mysqli_query($conn, "UPDATE queries SET reply='" . $_POST['reply'] . "' WHERE id='" . $_POST['id'] . "'");
}
header('Location: AdminQueryList.php');
?>