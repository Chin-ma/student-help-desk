<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/CSS/login.css">
</head>

<body>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>
    </div>
    <div class="form-box">
        <form action="login.php" method="post">
            <input type="text" name="username" id="user" class="field" placeholder="Username">
            <input type="password" name="password" id="pass" class="field" placeholder="Password"><i class="fa fa-eye" id="eye" onclick="show('pass')"></i>
            <button class="log-btn">Login</button>
        </form>
        <span class="state">Don't have an account? <a href="signup.php">Sign up</a></span>
    </div>
    <a href="adminPage.php">
        <div class="admin">
            <span class="admin-log">Admin Login</span>
        </div>
    </a>
    
    <script>
        function show(id) {
            var x = document.getElementById(id)
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>