<?php
    $stu_id = $_GET['id'];
    $conn = mysqli_connect("localhost" , "root" , "" , "crud") or die("Connection failed");
    $sql = "DELETE  FROM student WHERE sid = '{$stu_id}'";
    $result = mysqli_query($conn ,$sql) or die("Query failed");
    header("location: http://localhost/student/index.php");

?>