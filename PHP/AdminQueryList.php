<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/CSS/adminQueryList.css">
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