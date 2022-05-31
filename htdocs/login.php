<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title > ZHANYNDA </title>
       <!-- links -->
             <link rel="preconnect" href="https://fonts.googleapis.com">
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
              <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
              <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

           <link rel="icon" href="img/favicon.ico">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
           <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
           <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel= "icon" href="favicon.ico">
</head>
<body>
  <div class="Main container-fluid">
    <nav class=" navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="#"> ZHANYNDA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">help</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link " href="#">
    Blog
  </a>

</li>

</ul>
<form action="search.php"method="POST" class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required="">
<button class="btn btn-outline-light my-2 btn-sm my-sm-0" type="submit" name="search_btn">Search</button>
</form>
</div>
</nav>
   </div>

  <div class="container mt-4">


  <form class="gform" method="post" action="login.php">
  	<?php include('errors.php'); ?>

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not have a account?<a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
  <footer class="footer">
    <div class="footer__addr">
      <h1 class="">ZHANYNDA</h1>

      <h2>Contact</h2>

      <address>
        Nur-Sultan, Kabanbay Batyr Avenue 60a/1<br>

        <a class="footer__btn" href="zhanynda@gmail.com">Email Us</a>
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Media</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Online</a>
          </li>

          <li>
            <a href="#">Print</a>
          </li>

          <li>
            <a href="#">Alternative Ads</a>
          </li>
        </ul>
      </li>

      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Technology</h2>

        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Instagram</a>
          </li>

          <li>
            <a href="#">Youtube</a>
          </li>

          <li>
            <a href="#">Tiktok</a>
          </li>

          <li>
            <a href="#">Whatsup</a>
          </li>


        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>

          <li>
            <a href="#">Terms of Use</a>
          </li>

          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="legal">
      <p>&copy; 2022. All rights reserved.</p>

      <div class="legal__links">
        <span>Made with <span class="heart">♥</span></span>
      </div>
    </div>
  </footer>
</body>
</html>
