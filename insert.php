<?php
    
    require_once "config.php";

    if(isset($_POST['submit'])){

        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        $number = $_POST['number'];
        $user_name = $_POST['username'];

        $imagename = $_FILES['image']['name'];
        $tmname = $_FILES['image']['tmp_name'];
        $upload_file = "upload/".$imagename;


        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

      $insert = "INSERT INTO student_info (f_name,l_name,father_name,mother_name,class,roll,number,image,username,password,c_password) 
      VALUE ('$f_name','$l_name','$father_name','$mother_name','$class','$roll','$number','$imagename','$user_name','$password','$c_password')";

      if ($connect->query($insert) === TRUE) {
        move_uploaded_file($tmname,$upload_file);
        echo "
                <script>
                    alert('You admission Successfully');
                    
                    window.location.href='index.php';
                </script>
            ";
        
      } else {
        echo "
                <script>
                    alert('You Admission Not Successfully ');
                    window.location.href='index.php';
                </script>
            ";
        
      }
    }




?>