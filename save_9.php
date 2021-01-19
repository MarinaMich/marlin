<?php
$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=staff;", "root", "mysql");
$sql = "INSERT INTO notes (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: task_9.php");