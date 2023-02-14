

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admission.css">
  <title>Registration</title>
  <h2 class="heading">Wellcome to Web</h2>
</head>
<body>
  <div id="container">
    <h2><center><img style="height:100px;" src="icon/regis.png"/></center>Inter Your Information</h2>
        
    <form action="insert.php" method="POST" algin="center">

        <b><label id="from"><img class="icon" src="icon/name.png"/>First Name:</label><b></br>
        <input type="text" name="f_name" id="from" placeholder="Inter Your First Name" required></br></br>
        <b><label id="from">Last Name:</label><b></br>
        <input type="text" name="l_name" id="from" placeholder="Inter Your Last Name" required></br></br>
        <b><label id="from"><img class="icon" src="icon/name.png"/>Father Name:</label><b></br>
        <input type="text" name="father_name" id="from" placeholder="Inter Your Father name" required></br></br>
        <b><label id="from"><img class="icon" src="icon/name.png"/>Mother Name:</label><b></br>
        <input type="text" name="mother_name" id="from" placeholder="Inter Your Mother name" required></br></br>
        
        <b><label id="from"><img class="icon" src="icon/class.png"/>Department:</label><b></br>
        <input type="text" name="class" id="from" placeholder="Inter Your Admission class name" required></br></br>
        <b><label id="from"><img class="icon" src="icon/roll.png"/>Roll:</label><b></br>
        <input type="text" name="roll" id="from" placeholder="office Authorized" required></br></br>
        <b><label id="from"><img class="icon" src="icon/namber.png"/>Your Number:</label><b></br>
        <input type="text" name="number" id="from" placeholder="Inter Your Number" required></br></br>
        <b><label id="from"><img class="icon" src="icon/img.png"/> Passport Image:</label><b></br>
        <input type="text" name="image" id="from" placeholder="Give Your Photo" required></br></br>
        <b><label id="from"><img class="icon" src="icon/namber.png"/>Your Password:</label><b></br>
        <input type="password" name="password" id="from" placeholder="Inter Your Password" required></br></br>
        <b><label id="from"><img class="icon" src="icon/img.png"/> Your Confirm Password:</label><b></br>
        <input type="password" name="c_password" id="from" placeholder="Your Confirm Password" required></br></br>

        <button name="studentadmission.php" type="submit" id="button" value="Submt">submit</button>

        <a href="log-in.php"><input name="back" type="button" id="button" value="Log-In">
        
    </form>
  </div>

</body>
</html>

