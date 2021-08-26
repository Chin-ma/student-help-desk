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
    <link rel="stylesheet" href="/CSS/AdminQueryList.css">
</head>
<body>
    <div class="back">
        <img src="/OneStop_800x533 1.png" alt="1" class="logo-img" id="lg1">
        <img src="/OneStop_800x533 1.png" alt="2" class="logo-img" id="lg2">
        <img src="/OneStop_800x533 1.png" alt="3" class="logo-img" id="lg3">
        <img src="/OneStop_800x533 1.png" alt="4" class="logo-img" id="lg4">
    </div>
    <div class="navbar">
        <div class="header" onclick="window.location.href='Landing.html'">
            Student Help Desk
        </div>
        <div class="btn-links">
            <a href="Login.html" class="login">Logout</a>
        </div>        
    </div>
    <span class="stud-query">Student Queries</span>
    <div>
        <?php
            include 'Config.php';
            $sql = mysqli_query($conn, "SELECT querytext FROM queries ");
            while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="stud-queries">
                    <?php echo $row['querytext'];?><br>
                    <div class="reply-btn">
                        <button id="showarea" name="showarea" type="button" value="Show TextArea" onclick="openText()">Reply</button>
                        <form action="Reply.php" method="post">
                            <textarea id="text" name="reply" style="display: none;"></textarea>
                            <button type="submit" class="ok-btn">OK</button>
                        </form>
                    </div>
                </div>
            <?php }?>
    </div>
    
    <script type="text/javascript">
        function openText() {
            var x = document.getElementById("text");
            if (x.style.display === 'none') {
                x.style.display = 'block';
            }
            else {
                x.style.display = 'none';
            }
        }
    </script>
</body>
</html>