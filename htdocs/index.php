<?php

  session_start();
 // ПРОВЕРКА ВХОДА
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
// подключаем базу данных
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
           <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
           <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
<link rel= "icon" href="favicon.ico">
  </head>
       <body class="page1">

         <!-- menu -->
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
     <a class="nav-link" href="index.php?logout='1'" >Logout</a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="articles.php">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help</a>
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
         <div id="overlay">
           <div class="popup">
             <button class="close" title="Закрыть окно" onclick="swa2()"></button>
             <p>Online session with a psychologist</p>
             <br>
		   // форма для запроса сессии с психологом (отправляет эти данные в базу данных)
             <form class="gform register" method="post" action="index.php">
              <?php include('errors.php'); ?>
               <div class="input-group">
                 <label>Name</label>
                 <input type="text" name="name" value="<?php echo $name1; ?>" >
               </div>
              <div class="input-group">
                <label>Surname</label>
                <input type="text" name="surname1" value="<?php echo $surname1; ?>">
              </div>
              <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email1; ?>">
              </div>
              <div class="input-group">
                <button type="submit" class="btn" name="reg1_user">submit</button>
              </div>
             </form>
           </div>
         </div>
	       
	       // главная часть сайта
         <section class="title1"> 
           <div class="container-fluid" >
               <div class="hi row">
           <div class="head1 col-lg-6 col-md-12 ">
             <h1 class="zhan1">ZHANYNDA</h1>
   <p class="mp" align="justify"><strong>Hi, <?php echo $_SESSION['name']; ?></strong>
        Welcome to the Zhanynda! <br> Many people face difficult situations that seem unsolvable.  Only a few of them receive support. <br> The mission of the Zhanynda community is to help everyone get psychological help.</p>
<div class="d-flex flex-row flex-wrap">
  <button onclick="swa()" type="button" class="b1 btn btn-lg ">  for an adult</button>
  <button onclick="swa()" type="button" class="b1 btn btn-lg ">for a teenager</button>
  <button onclick="swa()" type="button" class="b1 btn btn-lg ">for parent</button>
           </div>
              </div>
           <div class=" col-lg-6 col-md-12">
                      <img class="img" src="img/1.png" title="mainflower" alt="">

                   </div>

                 </div>
               </div>
               </section>

               <section id="features">
                 <div class="container-fluid">
                 <div class="hi1 row">
                   <div class="col-lg-12">
                     <h3 align="center"> <strong>We will help you</strong></h3>
                   </div>

                 <div class="feature col-lg-6 ">

<p></p>
<img class="img2" src="img/3.png" title="mainr" alt="">
<p>self-acceptance</p>
</div>

<div class="feature col-lg-6 ">
<img class="img2" src="img/7.png" title="mainr" alt="">
<p>family relations</p>
 </div>
                 <div class="feature col-lg-6 ">

<img class="img2" src="img/5.png" title="mainr" alt="">
<p>harmony in relationships</p>
</div>
<div class="feature col-lg-6 ">
<img class="img2" src="img/6.png" title="mainr" alt="">
<p>self-love</p>
</div>
             </div>
               </div>
               </section>
	       // выбрать специалиста
               <section class="choosing">
                 <div class="row">
                 <div class="psy container-auto">
                   <div class="words">

                   <h3>Select a specialist
with whom you will be comfortable</h3>
  <a href="final.php">
  <button type="button" class="b2 btn btn-lg">Choose</button> </a>
                 </div>

               </div>
               </div>
               </section>
// картинки для поднятия настроения
               <section class="click1">
                 <div class="row">

                 <div class="psy1 container">
                   <div class="ins">
                     <div class="col-lg-6">
                       <h3 class="selectform">No mood?</h3>
                     </div>
                  <div class="col-lg-6">
                    <a href="mood.php">
                    <button type="button" class="b2 btn btn-lg ">Click</button> </a>
                  </div>
                   </div>
                        </div>


                 </div>
               </section>
// тесты
               <section class="choosing1">
                 <div class="row">
                 <div class="psy container-auto">
                   <div class="words">

                   <h3>Mini tests to determine the state of mental health:</h3>
  <a href="Aruzhan.php">
  <button type="button" class="b2 btn btn-lg">Start</button> </a>
                 </div>

               </div>
               </div>
               </section>
// карта
<h3 align="center">Our location</h3>
<div style="position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/163/nur-sultan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Нур‑Султан</a>
  <a href="https://yandex.kz/maps/163/nur-sultan/house/Y0gYcgdkQE0HQFtrfXx4c3libQ==/?indoorLevel=1&ll=71.405219%2C51.092492&source=wizgeo&utm_medium=mapframe&utm_source=maps&z=16.57" style="color:#eee;font-size:12px;position:absolute;top:14px;">Проспект Кабанбай Батыра, 60А/1 — Яндекс Карты</a>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7ce1f6feab19f0e6285e392d64c50e1511f489736de75075205755a4f09c3bd4&amp;source=constructor" width="100%" height="510" frameborder="0"></iframe><div class="">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

</div>
<script>
var b = document.getElementById('overlay');
function swa(){
	b.style.visibility = 'visible';
	b.style.opacity = '1';
	b.style.transition = 'all 0.7s ease-out 0s';
}
function swa2(){
	b.style.visibility = 'hidden';
	b.style.opacity = '0';
}
</script>

<script>
(function(d, w, c) {
  w.ChatraID = 'TnqxQKNfBwf9zzPBq';
  var s = d.createElement('script');
  w[c] = w[c] || function() {
      (w[c].q = w[c].q || []).push(arguments);
  };
  s.async = true;
  s.src = 'https://call.chatra.io/chatra.js';
  if (d.head) d.head.appendChild(s);
})(document, window, 'Chatra');
</script>
<footer class="footer">
  <div class="footer__addr">
	  
	  // футер
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
