<?php
if(isset($_POST['submit']))
{

 $userName = $_POST['uName'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordConfirm = $_POST['passwordConfirm'];

 echo $uName."<br/>".$email."<br/>".$password."<br/>".$passwordConfirm;
}


?>
<!DOCTYPE html>

<html>


<head>

<title>Registration Page</title>
<link rel="stylesheet" href="third.css" />


</head>


<body>

<div id="wrapper">

  <div id="formDiv">
<label></label>

    <form method="POST" action="register.php" enctype="multipart/form-data">


       <label>Username:</label>
    <input type="text" name="uName" maxlength="12" /><br /> <br />
      <label>Email:</label>
    <input type="text" name="email" maxlength="17" /><br /> <br />
       <label>Password:</label>
    <input type="password" name="password" /> <br /> <br />
       <label>Re-Enter Password:</label>
       <input type="password" name="password" /> <br /> <br />
    <input type="submit" name="Submit"/> <br /> <br />

    </form>

</div>
</div>
</body>







</html>
