
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
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li>
                        <a href="">
                            <div class="dropdown">
                                <button class="dropbtn">Class</button>
                                <div class="dropdown-content">
                                    <a href="">Intermediate</a>
                                    <a href="">degare</a>
                                    <a href="">Diploma</a>
                                </div>
                            </div>
                        </a></li>
                        <li><a href="admission.php">Admission</a></li>
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
        <div class="text-box">
            <h1>Dhaka International University</h1>
            <p>We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.
            </p>
            <a href="" class="hero-btn">Visit Use to More</a>
        </div>
    </section>

    <!----Course----->
    <section class="course">
        <h1>Courses We offers</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
                <h3>Diploma in Engreening</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nostrum assumenda quod iure soluta omnis minima, cum nam corporis.
                    Quasi neque eum perferendis repudiandae fuga similique ratione obcaecati
                    error ullam eaque.
                </p>
            </div>
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nostrum assumenda quod iure soluta omnis minima, cum nam corporis.
                    Quasi neque eum perferendis repudiandae fuga similique ratione obcaecati
                    error ullam eaque.
                </p>
            </div>
            <div class="course-col">
                <h3>Degare</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nostrum assumenda quod iure soluta omnis minima, cum nam corporis.
                    Quasi neque eum perferendis repudiandae fuga similique ratione obcaecati
                    error ullam eaque.
                </p>
            </div>
        </div>
    </section>
    <section class="campus">
        <h1>Our Global Campus</h1>
        <p>We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.
        </p>
        <div class="row">
            <div class="campus-col">
                <img src="images/london.png">
                <div class="layer">
                    <h3>London</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/newyork.png">
                <div class="layer">
                    <h3>New York</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/washington.png">
                <div class="layer">
                    <h3>Wasington</h3>
                </div>
            </div>
        </div>

    </section>

    <!----Facilities---->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png" alt="library">
                <h3>World's class Library</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus exercitationem modi ut commodi ullam aliquid sapiente,
                recusandae a eum sed dolore culpa repellendus alias accusamus iusto vero error harum dolorum.</p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png" alt="library">
                <h3>Largest Play Ground </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus exercitationem modi ut commodi ullam aliquid sapiente,
                recusandae a eum sed dolore culpa repellendus alias accusamus iusto vero error harum dolorum.</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png" alt="library">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus exercitationem modi ut commodi ullam aliquid sapiente,
                recusandae a eum sed dolore culpa repellendus alias accusamus iusto vero error harum dolorum.</p>
            </div>
        </div>
    </section>


    <!--------Testimonials--------->
    <section class="testimonial">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="row">
            <div class="testimonial-col">
                <img src="images/user1.jpg">
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At perspiciatis sint delectus molestiae eius a. 
                    Minus inventore saepe quas rerum laudantium quisquam temporibus et dolores, odit ad velit exercitationem nobis?
                </p>
                <h3>Christine Berkley</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/user2.jpg">
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At perspiciatis sint delectus molestiae eius a. 
                    Minus inventore saepe quas rerum laudantium quisquam temporibus et dolores, odit ad velit exercitationem nobis?
                    </p>
                    <h3>Dabit Byer</h3>
                    <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!----Call to action------>

    <section class="cta">
        <h1>Enroll For Our Various Online<br> Courses Anywhare From The World's </h1>
        <a href="" class="hero-btn">Contact Us</a>
    </section>


    <!-----Footer------>
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Quos asperiores<br> consectetur nisi labore autem 
            aliquid quod minima ut, esse, vero harum rem, 
            facilis natus debitis provident veniam.
             Sit, tempore minus!</p>
             <div class="icon">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
             </div>
             <p>Made With <i class="fa fa-heart-o"></i> By Easy Tutorials</p>
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
</body>
</html>