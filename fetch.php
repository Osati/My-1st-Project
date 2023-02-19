<?php
    
    require_once "config.php";

    $selectQuery = "SELECT * FROM `tbl_users` ORDER BY `user_id` ASC";
        $result = mysqli_query($connect,$selectQuery);
        if(mysqli_num_rows($result) > 0){
            $result_array = array();
            while($row = mysqli_fetch_assoc($result)){
                array_push($result_array, $row);
            }

        }


?>    