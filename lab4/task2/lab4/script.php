<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "forms";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $product = $_POST['product'];
  $comment = $_POST['comment'];
  $gender = $_POST['gender'];
  $interests = implode(", ", $_POST['interests']);

  $file = fopen('answers.txt', 'a');  


  fwrite($file, "Имя: $name\n");
  fwrite($file, "Фамилия: $surname\n");
  fwrite($file, "Email: $email\n");
  fwrite($file, "Обратная связь: $comment\n");
  fwrite($file, "Пол: $gender\n");
  fwrite($file, "Интересы: $interests\n");
  fwrite($file, "\n");


  fclose($file);

  echo 'Данные успешно добавлены в файл!';
} else {
  echo 'Ошибка: неверный метод запроса!';
}

$conn->close();
?>