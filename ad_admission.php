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
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                     <li><a href="adminpage.php">Home</a></li>
                    
                    <li>
                        <a href="">
                            <div class="dropdown">
                                <button class="dropbtn">Student</button>
                                <div class="dropdown-content">
                                    <a href="intermediate.php"><button>Intermediate</button></a>
                                    <a href="diploma.php"><button>Diploma</button></a>
                                    <a href="degree.php"><button>Degree</button></a>
                                </div>
                            </div>
                         </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="dropdown">
                                <button class="dropbtn">Class info</button>
                                <div class="dropdown-content">
                                    <a href="">Intermediate</a>
                                    <a href="">degare</a>
                                    <a href="">Diploma</a>
                                </div>
                            </div>
                        </a></li>
          
                        <li><a href="all_ad_info.php">Admission_info</a></li>
                        <li><a href="">
                            <div class="dropdown">
                                <button class="dropbtn">Result</button>
                                <div class="dropdown-content">
                                    <a href="">Intermediate</a>
                                    <a href="">degare</a>
                                    <a href="">Diploma</a>
                                </div>
                            </div>
                        </a></li>
                        <li><a href="">
                            <div class="dropdown">
                                <button class="dropbtn">Notice</button>
                                <div class="dropdown-content">
                                    <a href="">Class</a>
                                    <a href="">Exam</a>
                                    <a href="">Other</a>
                                </div>
                            </div>
                        </a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>        
        
        
        <h2><center><img style="height:100px;" src="icon/regis.png"/></center>Inter Your Information</h2>
            
            
        <div id="container">
        <form action="insert.php" method="POST" algin="center" enctype="multipart/form-data">
          <div class="row">
          
            <div class="container-col"> 
                <b><label id="from"><img class="icon" src="icon/name.png"/>First Name:</label></br>
                  <input type="text" name="f_name" id="from" placeholder="Inter Your First Name" required></br></br>
                <b><label id="from"><img class="icon" src="icon/name.png"/>Last Name:</label></br>
                  <input type="text" name="l_name" id="from" placeholder="Inter Your Last Name" required></br></br>
                <b><label id="from"><img class="icon" src="icon/name.png"/>Father Name:</label></br>
                  <input type="text" name="father_name" id="from" placeholder="Inter Your Father name" required></br></br>
                <b><label id="from"><img class="icon" src="icon/name.png"/>Mother Name:</label></br>
                  <input type="text" class="input" name="mother_name" id="from" placeholder="Inter Your Mother name" required></br></br>
                  
                <b><label id="from"><img class="icon" src="icon/class.png"/>Your Depart Name:</label></br>
                  <select name="class">
                
                    <option value="Intermediate">Intermediate</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Degree">Degree</option>
                
                  </select></br></br>

                <b><label id="from"><img class="icon" src="icon/number.png"/>Roll:</label></br>
                  <input type="text" name="roll" id="from" placeholder="office Authorized" required></br></br>
              
            </div>
                
            <div class="container-col"> 
                
                <b><label id="from"><img class="icon" src="icon/number.png"/>Your Number:</label></br>
                  <input type="text" name="number" id="from" placeholder="Inter Your Number" required></br></br>
                <b><label id="from"><img class="icon" src="icon/img.png"/>Upload Your Image:</label></br>
                  <input type="file" name="image" id="from" placeholder="Give Your Photo" required></br></br>
                <b><label id="from"><img class="icon" src="icon/user.png"/>Your User Name:</label></br>
                  <input type="text" name="username" id="from" placeholder="Inter Your User Name" required></br></br>
                <b><label id="from"><img class="icon" src="icon/show-password.png"/>Your Password:</label></br>
                  <input type="password" name="password" id="from" placeholder="Inter Your Password" required></br></br>
                <b><label id="from"><img class="icon" src="icon/show-password.png"/> Your Confirm Password:</label></br>
                  <input type="password" name="c_password" id="from" placeholder="Your Confirm Password" required></br></br>

                <button name="submit" type="submit" id="button" value="Submt">Submit</button>
              
            </div>  
            
          </div>  
        </form>
      </div>
</section>
    
        <!-- mebu bar responsive js -->
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