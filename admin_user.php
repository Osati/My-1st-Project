<?php
    require_once "config.php";

    if(isset($_POST['submit'])){
        $user_name = $_POST['user_name'];
        $pass = $_POST['password'];

        if(empty($user_name)){
            $empmsg_username = 'Fil up this field.';
        }
            if(empty($pass)){
                $empmsg_password = 'Fil up this field.';
        }else{

        $insert = "INSERT INTO admin_login (user_name,password) VALUE ('$user_name','$pass')";

        if ($connect->query($insert) === TRUE) {
            echo "
                <script>
                    alert('Admin User Add Successfully');
                    
                    window.location.href='admin_user.php';
                </script>
            ";
          } else {
            echo "
                <script>
                alert('Admin User Add Not Successfully');
                    
                window.location.href='admin_user.php';
                </script>
            ";
          }
          
          $connect->close();
        }

     }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>
                <div class="nav-links" id="navlinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="adminpage.php">Home</a></li>
                    </ul>
                </div>    
            </nav>
            <div class="container">
                <div class="row">
                    
                        <form action="admin_user.php" method="POST">
                            <div class="login-box">
                                <h2>Created Admin User</h2>
                        
                                <div class="textbox">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" placeholder="User name" name="user_name" value=""></br>
                                    <?php if(isset($_POST['submit'])){ echo $empmsg_username; } ?>
                                        
                                </div>
                        
                                <div class="textbox">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input type="password" placeholder="Password" name="password" value=""></br>
                                    <?php if(isset($_POST['submit'])){ echo $empmsg_password; } ?>
                                </div>
                        
                                <input class="btn-button" type="submit" name="submit" value="Submit">
                                <input class="btn-button" type="submit" name="update" value="Update">
                                <input class="btn-button" type="submit" name="delete" value="Delete">
                              
                            </div>
                        </form>
                    
                </div>
            </div>
            
        </sectoin>
        <!------javascript-------->
    <script>
        var navlinks = document.getElementById("navlinks");
        function showMenu(){
            navlinks.style.right="0";
        }
        function hideMenu(){
            navlinks.style.right="-200px";
        }
    </script>
    </body>
</html>