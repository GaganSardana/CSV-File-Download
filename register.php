<!DOCTYPE html>
<html lang="en">
<head>
  <title>AMBITION BOX </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"</script>
  <link rel="stylesheet" href="css/style4.css">
  <script src="js/register.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="lg1.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        <li><a href="#myPage"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
    </ul>
  </div>
</nav>
<!--Receiver Register-->
    <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Receiver Registration Form</b></h2></center></legend><br>

 
<!-- name input-->

<div class="form-group">
  <label class="col-md-4 control-label">User-Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Username" class="form-control"  type="text" required>
    </div>
  </div>
</div>


    
<!-- Email input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required>
    </div>
  </div>
</div>

<!-- Password input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" id="password" placeholder="Password" class="form-control"  type="password" onkeyup='check();' required />
    </div>
  </div>
</div>

<!-- Confirm Password input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm-Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control"  type="password" onkeyup='check();' required />&nbsp&nbsp&nbsp<span id='message'></span>
  
    </div>
  </div>
</div>


<!-- Contact input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact-No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact" placeholder="(+91)" class="form-control" type="text" pattern="[789][0-9]{9}" maxlength="10" required>
    </div>
  </div>
</div>
<!-- dob input-->

<div class="form-group">
  <label class="col-md-4 control-label">Date-Of-Birth</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  type="date" name="dob"  class="form-control"    required />
    </div>
  </div>
</div>


<!--gender input-->
<div class="form-group">
  <label class="col-md-4 control-label">Gender</label>  
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span>
    <input name="status" type="radio" value="Male" autofocus checked="true">&nbsp;
      <span>Male</span><br>
      </span>
      <span>
    <input name="status" type="radio" value="Female">&nbsp;
      <span>Female</span>
      </span>
    </div>
  </div>
</div>
<!--mode of contact-->
<div class="form-group">
  <label class="col-md-4 control-label">Mode-Of-Contact</label>  
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span>
    <input name="status1" type="radio" value="Email" autofocus checked="true">&nbsp;
      <span>Email</span>
      </span>
      <span>
    <input name="status1" type="radio" value="Phone">&nbsp;
      <span>Phone</span><br>
      </span>
    <span>
    <input name="status1" type="radio" value="None">&nbsp;
      <span>None</span>
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

    <!-- Footer -->

<footer class="text-center">
 
  <p>&copy; Gagan Sardana</p> 
</footer>
</body>
</html>


<?php

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['status'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$mode=$_POST['status1'];
$dob=$_POST['dob'];



$sql = "INSERT INTO receiver (Name,Email,Password,Gender,Contact,Mode,Dob)
VALUES ('$name', '$email', '$pass','$gender','$contact','$mode','$dob')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Thank You For Registration.Go Login!")</script>';}


elseif ($conn->query($sql) === FALSE) {
    echo '<script type="text/javascript">alert("Email-Id Already Exist.Try Again!")</script>';}
  
}
$conn->close();
?>
