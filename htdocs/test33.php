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
<style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');

      *, *:before, *:after {margin: 0; padding: 0; box-sizing: border-box;}
      body { color:#2F2556; font: 14px 'Open Sans', sans-serif;}

      .top { padding-right: 20px; background: #261F41; text-align: right; }
      a { color: rgba(255,255,255,0.6); text-transform: uppercase; text-decoration: none; line-height: 42px; }

      h1 {padding: 50px 0; font-weight: 400; text-align: center;}

      .main {margin: 0 auto; max-width: 500px;}
      .main .quizsection {margin-bottom: 20px;}
</style>
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


         <h1>Am I depressed? </h1>

         <section class="">

         <form name="quiz" action="javascript:check();" class="quizform">

         <div class="quizsection">


           <p>1.	Was bothered by things that usually don't bother me. </p>
         <input name="v1" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v1"  value="b" id="value1" type="radio"> No <br>


         <p>2.	Had a poor appetite.</p>
         <input name="v2" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v2"  value="b" id="value1" type="radio">  No <br>


         <p>3. Did not feel like eating, even though I should have been hungry.</p>
         <input name="v3" checked="checked" value="a" id="value1" type="radio">Yes <br>
         <input name="v3"  value="b" id="value1" type="radio"> No <br>


         <p>4. Felt hopeful about the future.</p>
         <input name="v4" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v4"  value="b" id="value1" type="radio">  No <br>


         <p>5. Had trouble keeping my mind on what I was doing.</p>
         <input name="v5" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v5"  value="b" id="value1" type="radio">  No <br>


         <p>6. Thought my life had been a failure.</p>
         <input name="v6" checked="checked" value="a" id="value1" type="radio">Yes <br>
         <input name="v6"  value="b" id="value1" type="radio">  No <br>


         <p>7. Felt happy. </p>
         <input name="v7" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v7"  value="b" id="value1" type="radio">  No <br>

         <p>8. Had restless sleep. </p>
         <input name="v8" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v8"  value="b" id="value1" type="radio">  No <br>


         <p>9. Talked less than usual. </p>
         <input name="v9" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v9"  value="b" id="value1" type="radio">  No <br>


         <p>10. Felt that everything I did was an effort.</p>
         <input name="v10" checked="checked" value="a" id="value1" type="radio"> Yes <br>
         <input name="v10"  value="b" id="value1" type="radio">  No <br>


         <input value="Submit" type="submit" /> <input value="Reset" type="reset" />
         </form>

         </section>


         <script type="text/javascript">


         function check()
         {
         var v1=document.quiz.v1.value;
         var v2=document.quiz.v2.value;
         var v3=document.quiz.v3.value;
         var v4=document.quiz.v4.value;
         var v5=document.quiz.v5.value;
         var v6=document.quiz.v6.value;
         var v7=document.quiz.v7.value;
         var v8=document.quiz.v8.value;
         var v9=document.quiz.v9.value;
         var v10=document.quiz.v10.value;
         var count=0;

         if(v1== "a"){
           count++;
         }
         if(v2== "a"){
           count++;
         }
         if(v3== "a"){
           count++;
         }
         if(v4== "a"){
           count++;
         }
         if(v5== "a"){
           count++;
         }
         if(v6== "a"){
           count++;
         }
         if(v7== "a"){
           count++;
         }
         if(v8== "a"){
           count++;
         }
         if(v9== "a"){
           count++;
         }
         if(v10== "a"){
           count++;
         }

         if (count==10){
           alert("Your condition is critical:"+count+ "");
         }
         if (count==9){
           alert("Your condition is critical:" +count+ "" );
         }
         if (count==8){
           alert("Your condition is critical:" +count+ "");
         }
         if (count==7){
           alert("Your condition is critical:" +count+ "");
         }
         if (count==6){
           alert("Your condition is normal:" +count+ "" );
         }
         if (count==5){
          alert("Your condition is normal:" +count+ "" );
         }
         if (count==4){
           alert("Your condition is normal:" +count+ "" );
         }
         if (count==3){
           alert("Your condition is good:" +count+ "" );
         }
         if (count==2){
           alert("Your condition is good:" +count+ "" );
         }
         if (count==1){
           alert("Your condition is good:" +count+ "");
         }

         }
           </script>


</body>
