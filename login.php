<?php
    session_start();

    $_message = "";

    if(count($_POST)>0){
        require_once "config.php";
        $result = mysqli_query($con,"SELECT * FROM admin_login WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)){
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
            } else {
             $message = "Invalid Username or Password!";
            }
        }
        if(isset($_SESSION["id"])) {
        header("Location:adminpage.php");
        }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100;0,200;0,400;0,500;1,200;1,300&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>University web-page</title>
</head>
<body class="loginbody">
    <section class="header">
       <nav>
        <a href="#"><img src="images/logo.png"></a>
       </nav> 
        
            <form action="validate.php" method="POST">
                <div class="login-box">
                    <h1>Login</h1>
        
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username" name="username" value="">
                        
                    </div>
        
                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="Password" name="password" value="">
                    </div>
        
                    <input class="btn-button" type="submit" name="submit" value="Sign In">
                    <h5>Not have a accound ? <a href='admin_user.php'> Registation.</a></h5>
                </div>
            </form>
            
           
    </section>  
</body>
</html>