<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Student Help Desk</title>
    <link rel="android-chrome-512x512.png icon" href="/favicon_io/favicon.ico">
    <link rel="stylesheet" href="/CSS/Landing.css">
    <link rel="stylesheet" href="/CSS/Query.css">
</head>
<body>
    <div class="back">
        <img src="/OneStop_800x533 1.png" alt="1" class="logo-img" id="lg1">
        <img src="/OneStop_800x533 1.png" alt="2" class="logo-img" id="lg2">
        <img src="/OneStop_800x533 1.png" alt="3" class="logo-img" id="lg3">
        <img src="/OneStop_800x533 1.png" alt="4" class="logo-img" id="lg4">
    </div>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>       
    </div>
    <div class="query-form">
        <div class="heading">
            <span class="query-head">Your Query</span>
        </div>
        <form action="Query.php" method="post">
            <input type="text" name="name" class="user-data" id="u-name" placeholder="Your name">
            <input type="text" name="subject" class="user-data" id="u-sub" placeholder="Subject">  
            <textarea name="querytext" id="q-text" placeholder="Type here ..."></textarea>
            <div class="action-btns">
                <a href="Home.html">
                    <button class="sub-btn" type="submit">Post</button>
                </a>
            </div>
        </form>
        <a href="Home.html">
            <button class="can-btn">Cancel</button>
        </a>
    </div>
</body>
</html>