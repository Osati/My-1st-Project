<?php
    require_once "config.php";

        $id=$_REQUEST['id'];
        $query = "DELETE FROM student_info WHERE id=$id"; 
        $result = mysqli_query($conn,$query) or die ( mysqli_error());
        header("Location: intermediate.php"); 

    
?>