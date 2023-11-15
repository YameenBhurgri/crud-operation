<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
        if(isset($_POST['deletebtn'])){
            $stu_id = $_POST['sid'];
           $conn = mysqli_connect("localhost" , "root" , "" , "crud") or die("Connection failed");
           $sql = "DELETE  FROM student WHERE sid = '{$stu_id}'";
           $result = mysqli_query($conn ,$sql) or die("Query failed");
           header("location: http://localhost/student/index.php");
        }
    ?>
</div>
</div>
</body>
</html>
