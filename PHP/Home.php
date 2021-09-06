<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    
</head>
<body>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>
        <div class="btn-links">
            <a href="login.php" class="login">Logout</a>
        </div>        
    </div>
    <a href="queryPage.php" class="rem-line">
        <div class="large-btns" id="btn1">
            <span class="post1">Post your query</span>
        </div>
    </a>
    <a href="viewQuery.php" class="rem-line">
        <div class="large-btns" id="btn2">
            <span class="post1" id="post2">View posted queries</span>
        </div>
    </a>
    <a href="contact.php" class="rem-line">
        <div class="large-btns" id="btn3">
            <span class="post1" id="post3">Contact Us</span>
        </div>
    </a>
   
</body>
</html>
