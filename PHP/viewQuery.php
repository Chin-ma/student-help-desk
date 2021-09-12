<?php 
include 'header.php';
$add = 'Reply : ';
$colon = ' : ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/CSS/queryList.css">
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
    <div class="query-head">
        <span class="y-query">Your Queries</span>
    </div>
    <form action="search.php" method="post">
        <div class="search-data">
            <input type="text" placeholder="Search your query" name="search" class="query-search" id="q-serach">
        </div>
    </form><br>
    <div>
    <?php
            include 'config.php';
            $sql = mysqli_query($conn, "SELECT * FROM queries ORDER BY id DESC");
            while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="timestamp" id="q-time">
                    <?php echo $row['querytime']?>
                </div>
                <div class="query">
                    <?php echo $row['name'].$colon.$row['querytext'];?>
                </div>
                <?php 
                    if ($row['reply']) { ?>
                        <div class="timestamp" id="r-time">
                            <?php echo $row['replytime'];?>
                        </div>
                    <?php }?> 
                <div class="query-reply" id="quer">
                    <?php 
                        if ($row['reply']) {
                            echo $add.$row['reply'];
                        } else {
                            echo $row['reply'];
                        }
                    ?>
                    
                </div>
                
            <?php }?>
    </div> 
</body>         
</html>