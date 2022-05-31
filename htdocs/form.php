<?php
  session_start();

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

    <link rel="stylesheet" href="style.css"></head>
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
         <div class="container">

         <form>
     <input class="form-topics__input" type="checkbox" name="topics" tabindex="0" id="12" value="12">
     <label for="html">Procrastination and burnout</label><br>
     <input type="radio" id="css" name="fav_language" value="CSS">
     <label for="css">Self-doubt</label><br>
     <input type="radio" id="javascript" name="fav_language" value="JavaScript">
     <label for="javascript">Relationship difficulties</label>
   </form>

 </div>
 <form action="quiz_result.php" method="post" id="quiz">
   <li>



   <h3>Что вас тревожит?</h3>

   <div>

   <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />

   <label for="question-1-answers-A">Неуверенность в себе </label>

   </div>

   <div>

   <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />

   <label for="question-1-answers-B">Отношения с партнером</label>

   </div>

   <div>

   <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />

   <label for="question-1-answers-C">Отсутсвие интереса к жизни</label>

   </div>

   <div>

   <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />

   <label for="question-1-answers-D">Не знаю</label>

   </div>



   </li>
   <li>



   <h3>Пол специалиста</h3>

   <div>

   <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />

   <label for="question-2-answers-A">Женщина</label>

   </div>

   <div>

   <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />

   <label for="question-2-answers-B">Мужчина</label>

   </div>

   <div>

   <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />

   <label for="question-2-answers-C">Неважно</label>

   </div>




   </li>
   <li>



   <h3>Возраст специалиста</h3>

   <div>

   <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />

   <label for="question-3-answers-A">25-35 </label>

   </div>

   <div>

   <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />

   <label for="question-3-answers-B">35-45</label>

   </div>

   <div>

   <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />

   <label for="question-3-answers-C">45-65</label>

   </div>

   <div>

   <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />

   <label for="question-3-answers-D">неважно</label>

   </div>



   </li>


   <input type="submit" value="Submit Quiz" />

</form>
<div >
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


</div>

</body>
</html>
