<!DOCTYPE html>
<html lang="en">
<head>
  <title>AMBITION BOX </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style1.css">
  <script src="js/top.js"></script>
   
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
      <a class="navbar-brand" href="#myPage"><img src="images/logo.png" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#myPage">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="HomePage.php#contact">CONTACT</a></li>
        <li><a href="lg1.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
    </ul>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" alt="" width="1200" height="700">
      </div>

      <div class="item">
        <img src="images/2.jpeg" alt="" width="1200" height="700">
              
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="" width="1200" height="700">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>  
<!-- Container (About Us Section) -->
<div id="aboutus" class="container text-center">
  <h3>ABOUT US</h3>
  
  <p class="text-justify">Ambition is a strong desire to achieve something in life. A person without any ambition is like a boat without rudder. Having an ambition needs continuous efforts towards achieving it. One cannot achieve anything if one just day dreams and does nothing.A strong will-power and determination will carry a person forward against all obstacles. Different people have different ambitions. Some aim to become teachers, soldiers, artists, politicians, doctors, engineers etc. Some try to amass wealth and some run after the name and fame. There are others who aim to serve humanity. One should have a noble aim in life and strive hard honestly, sincerely and with dedication to achieve it.</p>
  
  <p class="text-justify">An ideal person always tires to achieve his goal. Aspiring for great things in life is human tendency. The youth of today wants to scale the greater heights of success. if we dream for the stars, we will at least reach the moon.Different people have different ambitions in life. The nature of ambition varies from persons to person. It depends upon one’s family background, upbringing, social status and economic condition.Swami Vivekananda said that, “Man is master of his destiny”. He said that by will-power alone we an fully determine and control our actions and thereby change the course of Fate. But many people believe, with firm conviction, in the inscrutable hand of Fate. In fact, in India fatalism is very much present among all cross-section of the population</p>

  <p class="text-justify">German playwright, Paul Thomas Mann said, “There are two kinds of men in this world, men of thought and men of action. Thinks like the men of thought, act like the men of action.” Our actions are preceded by our thoughts. We are judged only by our deeds. Thus we must do right action and try to avoid immoral or bad action.One’s motive is one’s aim in life should be noble and good. One should nor try to fulfill one’s ambition by foul means. In short, one should have a noble aim in life. One’s action should be directed towards the nation’s prosperity. One should strive hard honestly, sincerely and with dedication to achieve it.</p>  
</div>
<!-- Container (Contact Section) -->
<form action="" method="post">
<div id="contact" class="container">
  <h3 class="text-center">CONTACT</h3>
  <br /><br />

  <div class="row">
    <div class="col-md-4">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
         
    </div>
  </div>
</div>
</form>
<!--php code for contact -->
<?php
#error_reporting(E_ERROR | E_PARSE);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

require 'connection.php';

$sql = "INSERT INTO contact (Name,Email,Comment)
VALUES ('$name', '$email', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Thank You For Your Contribution . It Means ALot To Us!")</script>';
    echo "<script> location.href='index.php'; </script>";
  }
$conn->close();
}
?>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; Gagan Sardana</p> 
</footer>
</script>
</body>
</html>