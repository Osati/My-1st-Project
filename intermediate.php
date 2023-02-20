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
                        <li>
                            <a href="">
                                <div class="dropdown">
                                    <button class="dropbtn">Student_information</button>
                                    <div class="dropdown-content">
                                        <a href="">degare</a>
                                        <a href="">Diploma</a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="dropdown">
                                    <button class="dropbtn">Class_info</button>
                                    <div class="dropdown-content">
                                        <a href="">Intermediate</a>
                                        <a href="">degare</a>
                                        <a href="">Diploma</a>
                                    </div>
                                </div>
                            </a></li>
                            <li><a href="admission.php">Admission</a></li>
                            <li><a href="#">Admission_info</a></li>
                            <li><a href="">
                                <div class="dropdown">
                                    <button class="dropbtn">Result_Update</button>
                                    <div class="dropdown-content">
                                        <a href="">Intermediate</a>
                                        <a href="">degare</a>
                                        <a href="">Diploma</a>
                                    </div>
                                </div>
                            </a></li>
                            <li><a href="">
                                <div class="dropdown">
                                    <button class="dropbtn">Notice_Update</button>
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
            
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Number</th>
                        <th>action</th>
                    
                <?php
                    $sql="SELECT roll, f_name, class, number from student_info";
                   
                    $query=mysqli_query($connect,$sql);
                    while($info=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $info["roll"]; ?></td>
                            <td><?php echo $info["f_name"]; ?></td>
                            <td><?php echo $info["class"]; ?></td>
                            <td><?php echo $info["number"]; ?></td>
                        </tr>

                        <?php
                    }
                ?>
                
                
            </table>
            </div>
        </section>

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

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
    <script src="ajax.js"></script>

    <script>
$( document ).ready(function() {
    $.ajax({
        url: 'fetch.php',
        mothod: 'post',
        dataType: 'json',
        success:function(data){
            let string = '';
            $.each(data, function(key, value){
                string += `<tr>
                <td>${value['user_firstName']} ${value['user_lastName']}</td>
                <td>${value['user_email']}</td>
                <td>${value['user_registrationDate']}</td>
                </tr>`;
            });
            $('.tbody').append(string);
        },
        error:{

        }
    });
});
</script>
    </body>
</html>