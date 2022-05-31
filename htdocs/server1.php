<?php
session_start();

$name1 = "";
$surname1 = "";
$email1    = "";

$errors = array();


$dbb = mysqli_connect('localhost', 'root', 'root', 'registration1');

if (isset($_POST['reg1_user'])) {
$name1 = mysqli_real_escape_string($dbb, $_POST['name1']);
  $surname1 = mysqli_real_escape_string($dbb, $_POST['surname1']);
  $email1 = mysqli_real_escape_string($dbb, $_POST['email1']);


if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($surname1)) { array_push($errors, "Surname is required"); }
  if (empty($email1)) { array_push($errors, "Email is required"); }


  $user_check_query = "SELECT * FROM users2 WHERE email1='$email1' LIMIT 1";
  $result = mysqli_query($dbb, $user_check_query);
  $user1 = mysqli_fetch_assoc($result);


    if ($user1['email1'] === $email1) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {
  	$query = "INSERT INTO users2 (name1, surname1, email1)
  			  VALUES('$name1', '$surname1', '$email1')";
  	mysqli_query($dbb, $query);
    $_SESSION['name1'] = $name1;
  	$_SESSION['surname1'] = $surname1;

  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


?>
