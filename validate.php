<?php
    require_once "config.php";
    
    if(isset($_POST['login'])){

    $user_name = $_POST['username'];
    $pass = $_POST['password'];
    
    $query= "select * from admin_login where user_name='$user_name' AND password='$pass'";

    $check=mysqli_query($connect,$query);

    if($check){

        if(mysqli_num_rows($check) > 0){

            echo "
                <script>
                    alert('You are ID Successfully Login');
                    window.location.href='adminpage.php';
                </script>
            ";
        
        }else{
        
           echo "
                <script>
                    alert('Your Username & Password error.');
                    window.location.href='adminlogin.php';
                </script>
            ";
        }
    } 
}
?> 