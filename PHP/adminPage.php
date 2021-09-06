<?php include 'header.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/CSS/admin.css">
</head>

<body>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>
    </div>
    <div class="form-box">
        <form action="admin.php" method="post">
            <input type="text" name="adminname" id="user" class="field" placeholder="Admin Username">
            <input type="password" name="adminpass" id="pass" class="field" placeholder="Password"><i class="fa fa-eye" id="eye" onclick="show('pass')"></i>
            <button class="log-btn">Login</button>
        </form>
        <span class="state">The Admin can reply to the posted queries. Authorised users only.</span>
    </div>
    
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