<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "forms";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$surname = $_POST['surname'];
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$product = $_POST['product'];
$comment = $_POST['comment'];

// Запись данных в таблицу
$sql = "INSERT INTO `Orders`(`surname`, `name`, `fathername`, `address`, `phone`, `email`, `product`, `comment`) VALUES ('$surname', '$name', '$fathername', '$address', '$phone', '$email', '$product', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Заказ успешно оформлен";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>