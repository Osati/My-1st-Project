<?php
    
    require_once "config.php";
  
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $number = $_POST['number'];
    $image = $_POST['image'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

  $insert = "INSERT INTO student (f_name,l_name,father_name,mother_name,class,roll,number,image,password,c_password) 
  VALUE ('$f_name','$l_name','$father_name','$mother_name','$class','$roll','$number','$image','$password','$c_password')";

if ($connect->query($insert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . $connect->error;
}


?>