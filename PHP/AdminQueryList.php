<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Student Help Desk</title>
    <link rel="android-chrome-512x512.png icon" href="/favicon_io/favicon.ico">
    <link rel="stylesheet" href="/CSS/landing.css">
    <link rel="stylesheet" href="/CSS/adminQueryList.css">
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
        <div class="btn-links">
            <a href="login.php" class="login">Logout</a>
        </div>        
    </div>
    <span class="stud-query">Student Queries</span>
    <div>
    <?php 
            include 'Config.php';
            $sql = mysqli_query($conn, "SELECT * FROM queries");
            while ($row = mysqli_fetch_assoc($sql)) { ?>
                <div class="stud-queries">
                    <?php echo $row['name'];?> :&nbsp
                    <?php echo $row['querytext'];?>
                </div>
                <form action="Reply.php" method="post">
                    <textarea id="insert-text" name="reply" value="<?php echo $row['reply'];?>"></textarea>   
                    <button type="submit" name="submit" value="Submit Form" class="ok-btn">OK</button>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                </form>
                
        <?php }?>
    </div>
</body>
</html>