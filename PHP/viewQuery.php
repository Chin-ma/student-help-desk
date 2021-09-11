<?php 
include 'header.php';
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
            $sql = mysqli_query($conn, "SELECT * FROM queries");
            while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="query">
                    <?php echo $row['querytext'];?>
                </div>
                <div class="query-reply" id="quer" style="display: block;">
                    <?php echo $row['reply'];?>
                </div>
                
            <?php }?>
    </div> 
</body>         
</html>