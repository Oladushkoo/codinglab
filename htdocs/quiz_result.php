
<?php


$db1 = new mysqli("localhost", "root", "root", "finndspecialist");
if($db1->connect_error){
  die("Ошибка: " . $db1->connect_error);
}
$sql = "SELECT * FROM specialists";
if($result = $db1->query($sql)){
  $rowsCount = $result->num_rows;
  echo "<p>Получено объектов: $rowsCount</p>";
  echo "<table><tr><th>Id</th><th>Имя</th><th>Пол</th><th>Возраст</th><th>Случай</th></tr>";
  foreach($result as $row){
      echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["name"] . "</td>";
          echo "<td>" . $row["gender"] . "</td>";
          echo "<td>" . $row["age"] . "</td>";
          echo "<td>" . $row["topics"] . "</td>";
      echo "</tr>";
  }
  echo "</table>";
  $result->free();
} else{
  echo "Ошибка: " . $conn->error;
}
$db1->close();




$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];



$totalCorrect = 0;
$array = array(" ");


if ($answer1 == "A") { array_push($array, "a");

);  }

if ($answer1 == "B") { array_push($array, "b");

); }

if ($answer1 == "C") {array_push($array, "c");

); }

if ($answer1 == "D") {array_push($array, "d"); }


if ($answer2 == "A") {array_push($array, "a"); }

if ($answer2 == "B") {array_push($array, "b");}

if ($answer2 == "C") { array_push($array, "c");}


if ($answer3 == "A") { array_push($array, "a");}

if ($answer3 == "B") { array_push($array, "b"); }

if ($answer3 == "C") { array_push($array, "c"); }

if ($answer3 == "D") { array_push($array, "d"); }

print_r($array);
?>
