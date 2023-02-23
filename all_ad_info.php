<?php
    require_once "config.php";
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
                                    <button class="dropbtn">Student info</button>
                                    <div class="dropdown-content">
                                    <a href="intermediate.php">Intermediate</a>
                                        <a href="diploma.php">Diploma</a>
                                        <a href="degree.php">Degree</a>
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
                            <li><a href="ad_admision.php">Admission</a></li>
                            <li><a href="all_ad_info.php">Admission_info</a></li>
                            <li><a href="">
                                <div class="dropdown">
                                    <button class="dropbtn">Result Update</button>
                                    <div class="dropdown-content">
                                        <a href="">Intermediate</a>
                                        <a href="">degare</a>
                                        <a href="">Diploma</a>
                                    </div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="dropdown">
                                    <button class="dropbtn">Notice Update</button>
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
            <div class="admission-table">
                <h1>Intermediate All Admission Students Information.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minus architecto libero sint pariatur.</p>
                <table class="table-body" id="table-body" name="">
                        <tr>
                            <th>ID</th>
                            <th>First_Name</th>
                            <th>Last Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Department</th>
                            <th>Roll</th>
                            <th>Number</th>
                            <th>Images</th>
                            <th id="action">action</th>
                        </tr>
                    <?php
                        $sql="SELECT * from student_info";
                    
                        $query=mysqli_query($connect,$sql);
                        while($info=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $info["id"]; ?></td>
                                <td><?php echo $info["f_name"]; ?></td>
                                <td><?php echo $info["l_name"]; ?></td>
                                <td><?php echo $info["father_name"]; ?></td>
                                <td><?php echo $info["mother_name"]; ?></td>
                                <td><?php echo $info["class"]; ?></td>
                                <td><?php echo $info["roll"]; ?></td>
                                <td><?php echo $info["number"]; ?></td>
                                <td><?php echo $info["image"]; ?></td>
                                
                                <td>
                                    <button name="edit">update</button>
                                    <button name="delete">Delete</button>
                                </td>
                            </tr>

                            <?php
                        }
                    ?>
                    
                    
                </table>
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