
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

  </body>
  </html>
