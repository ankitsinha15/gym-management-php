<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}


?>




<!DOCTYPE html>
<html>
<head>
	<title>Main home page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny&display=swap" rel="stylesheet"> 
<style>

	
	.animat {
	background-color: black;
}

body {
	font-family: 'Coiny', cursive;
    background-color: black;
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev{
    display:block;
}
h1{
	color: #fff !important;
	margin-top: 200px !important;
	text-align: center;
	text-transform: uppercase;


}





</style>
</head>
<body>
<header>
<nav class="navbar navbar-toggleable-sm navbar navbar-expand-md navbar-trans fixed-top">
	 <div class="container">
    <a class="navbar-brand" href="#">
          <img src="4.jpg" alt="logo" width="100px" height="45px">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="project_page.php"style="font-family: Zapf Chancery, cursive; color: white">Home</b>
               
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"style="font-family: Zapf Chancery, cursive; color: white">Exercise</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="logout.php"style="font-family: Zapf Chancery, cursive; color: white">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php"style="font-family: Zapf Chancery, cursive; color: white">Chat</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!--------------------------------------------------------------------------------------------------->
<div>


<div class="animat">


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img class="d-block w-100" src="fitness-power-man-person-17840.jpg" height="660px" alt="First slide">
      <div class="carousel-caption">
<h1 class="animated bounceInLeft">Welcome <?php echo $_SESSION['username']; ?></h1>
<h2 class="animated bounceInRight">to this fitness club</h2></div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="man-exercising-at-the-gym-with-fixed-weight-dumbbells-2078062.jpg" height="660px" alt="Second slide">
      <div class="carousel-caption">
<h1 class="animated bounceInLeft">Welcome <?php echo $_SESSION['username']; ?></h1>
<h2 class="animated bounceInRight">to this fitness club</h2>    </div>
   <!-- <div class="carousel-item">
      <img class="d-block w-100" src="woman-doing-push-ups-2780762.jpg" height="660px" alt="Third slide">
      <div class="carousel-caption">
<h1 class="animated bounceInLeft">Welcome <?php echo $_SESSION['username']; ?></h1>
<h2 class="animated bounceInRight">to this fitness club</h2>
    </div>-->
  </div>


  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>


</div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>