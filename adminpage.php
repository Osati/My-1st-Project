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
                                    <a href="intermediate.php"><button>Intermediate</button></a>
                                    <a href=""><button class="">Diploma</button></a>
                                    <a href=""><button class="">Degree</button></a>
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
        <div class="text-box">
            <h1>Dhaka International University</h1>
            <p>We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.
            </p>
        </div>
    </section>