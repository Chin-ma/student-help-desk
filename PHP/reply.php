<?php 

include_once 'config.php';
if (count($_POST)>0) {
	$sql = ("UPDATE queries SET reply='" . $_POST['reply'] . "' WHERE id='" . $_POST['id'] . "';UPDATE queries SET replytime=CURRENT_TIMESTAMP() WHERE id='" . $_POST['id'] . "'");
	mysqli_multi_query($conn, $sql);
}
header('Location: adminQueryList.php');
?>