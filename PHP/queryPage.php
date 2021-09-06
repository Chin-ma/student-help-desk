<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/CSS/query.css">
</head>
<body>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>       
    </div>
    <div class="query-form">
        <div class="heading">
            <span class="query-head">Your Query</span>
        </div>
        <form action="query.php" method="post">
            <input type="text" name="name" class="user-data" id="u-name" placeholder="Your name">
            <input type="text" name="subject" class="user-data" id="u-sub" placeholder="Subject">  
            <textarea name="querytext" id="q-text" placeholder="Type here ..."></textarea>
            <div class="action-btns">
                <a href="viewQuery.php">
                    <button class="sub-btn" type="submit">Post</button>
                </a>
            </div>
        </form>
        <a href="home.php">
            <button class="can-btn">Cancel</button>
        </a>
    </div>
</body>
</html>