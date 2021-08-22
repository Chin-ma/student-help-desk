<?php

session_start();
include 'Config.php';
function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg')</script>";
    }

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        alert('Username required');
    }
    elseif (empty($password)) {
        alert('Password required');
    }
    else {
        $sql = "SELECT * FROM stud_details WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                header('Location: Home.html');
            }
            else {
                alert('Incorrect Username or Password');
            }
        }
        else {
            alert('Incorrect Username or Password');
        }
    }
}
header('Location: Home.html');


?>