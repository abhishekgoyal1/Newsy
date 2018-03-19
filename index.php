<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Newsy</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Custom styles for this template -->
<link href="css/newsy.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.html">User Name</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.html">Profile</a>
        </li>
        <li class="dropdown nav-item">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort by
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Timestamp</a></li>
                <li><a href="#">Vote Count</a></li>
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="index2.php">Logout</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>NEWSY</h1>
          <span class="subheading">Best News Feed ever!</span>
        </div>
      </div>
    </div>
  </div>
</header>
<script>
$(document).ready(function(){
   $("#loader").hide();
   $('#div1').load("newsfeed.php",function(response, status, xhr) {
       if (status == "error") {
           var msg = "Sorry but there was an error: ";
           alert(msg + xhr.status + " " + xhr.statusText);
       }
   });   
});
</script>

<div id="div1">
    <div id="loader">Loading...</div>
</div>


<hr>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p class="copyright text-muted">Made By Abhishek Goyal, Sahil Gupta, Abhishek Dawas and Abhishek Singh</p>
      </div>
    </div>
  </div>
</footer>



</body>

</html>
