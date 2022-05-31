<?php
/* Попытка подключения к серверу MySQL. Предполагая, что вы используете MySQL
 сервер с настройкой по умолчанию (пользователь root без пароля)  */
$link = mysqli_connect("localhost", "root", "root", "finndspecialist");

// Проверка подключения
if($link === false){
    die("Ошибка подключения. " . mysqli_connect_error());
}

// Попытка выполнения запроса select

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Simple Multiple Choice Quiz with JavaScript</title>

  <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');

        *, *:before, *:after {margin: 0; padding: 0; box-sizing: border-box;}
        body {background: #2F2556; color: #B9B5C7; font: 14px 'Open Sans', sans-serif;}

        .top { padding-right: 20px; background: #261F41; text-align: right; }
        a { color: rgba(255,255,255,0.6); text-transform: uppercase; text-decoration: none; line-height: 42px; }

        h1 {padding: 50px 0; font-weight: 400; text-align: center;}

        .main {margin: 0 auto; max-width: 500px;}
        .main .quizsection {margin-bottom: 20px;}
 </style>

</head>

<body>

  <h1>Quick Anxiety Screening Test</h1>

  <section class="main">

  <form name="quiz" action="javascript:d()" class="quizform">

  <div class="quizsection">


    <h3>Укажите пол специалиста </h3>
  <input name="v1" checked="checked" value="Female" id="value1" type="radio"> Female <br>
  <input name="v1"  value="Male" id="value1" type="radio"> Male <br>
<input name="v1"  value="optional" id="value1" type="radio"> Doesn't matter <br>

  <h3>Укажите возраст специалиста</h3>
  <input name="v2" checked="checked" value="2535" id="value1" type="radio">25-35<br>
  <input name="v2"  value="3545" id="value1" type="radio">  35-45 <br>
    <input name="v2"  value="4555" id="value1" type="radio">  45-55 <br>
      <input name="v2"  value="5565" id="value1" type="radio">  55-65 <br>
        <input name="v2"  value="option" id="value1" type="radio">  Doesn't matter <br>


  <h3>Что вас беспокоит?</h3>
  <input name="v3" checked="checked" value="a" id="value1" type="radio"><br>
  <input name="v3"  value="b" id="value1" type="radio"> No <br>
  <input name="v3"  value="b" id="value1" type="radio"> No <br>
  <input name="v3"  value="b" id="value1" type="radio"> No <br>
  <input name="v3"  value="b" id="value1" type="radio"> No <br>
  <input name="v3"  value="b" id="value1" type="radio"> No <br>
  <input name="v3"  value="b" id="value1" type="radio"> No <br>


  <input value="Submit" type="submit" /> <input value="Reset" type="reset" />
  </form>

  </section>


<script type="text/javascript">

function d() {
  <?php
  if ($_POST[v1]== "Female"){
  $sql = "SELECT * FROM specialists WHERE age='Female'";
  }
  if ($_POST[v1]== "Male"){
   $sql = "SELECT * FROM specialists WHERE age='Male'";
  }
  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
          echo "<table>";
              echo "<tr>";
                  echo "<th>id</th>";
                  echo "<th>name</th>";
                  echo "<th>age</th>";
                  echo "<th>gender</th>";
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['age'] . "</td>";
                  echo "<td>" . $row['gender'] . "</td>";
              echo "</tr>";
          }
          echo "</table>";
          // Закрыть набор результатов
          mysqli_free_result($result);
      } else{
          echo "Записей, соответствующих вашему запросу, не найдено.";
      }
  } else{
      echo "ОШИБКА: не удалось выполнить $sql. " . mysqli_error($link);
  }

   ?>
 }

</script>

</body>
</html>
