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
                <div class="timestamp">
                    <?php echo $row['querytime'];?>
                </div>
                <div class="stud-queries">
                    <?php echo $row['name'];?> :&nbsp
                    <?php echo $row['querytext'];?>
                </div>
                <form action="delete.php" method="post">
                    <button type="submit" name="submit" value="Submit Form" class="delete" onclick="del()"><i class="fa fa-trash-o fa-2x" id="del-btn"></i></button>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                </form>
                <div class="rep-show" data-id="<?php echo $row['id'];?>" onclick="show(this)">Reply</div>
                <form action="reply.php" method="post" style="display: none;" id="form-<?php echo $row['id'];?>">
                    <textarea id="insert-text" name="reply" value="<?php echo $row['reply'];?>"></textarea>   
                    <button type="submit" name="submit" value="Submit Form" class="ok-btn">OK</button>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                </form>
                
        <?php }?>
    </div>
    <script>
        function del() {
            alert("Are you sure you want to delete this query?")
        }

        function show(self) {
            var commentId = self.getAttribute("data-id");
            if (document.getElementById("form-" + commentId).style.display == "") {
                document.getElementById("form-" + commentId).style.display = "none";
            } else {
                document.getElementById("form-" + commentId).style.display = "";
            }
        }
    </script>
</body>
</html>