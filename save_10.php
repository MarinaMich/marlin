<?php
session_start();
//данные, полученные из формы
$text = $_POST['text'];
//соединение с БД
$pdo = new PDO("mysql:host=localhost;dbname=staff;", "root", "mysql");
//запрос в БД на наличие схожих данных
$sql = "SELECT * FROM notes WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
//ответ от БД
$task = $statement->fetch(PDO::FETCH_ASSOC);
//если переменная вернется не пустая
	if(!empty($task)){
		$message = "Введенные данные уже существуют";
		//добавляем переменную в сессию
		$_SESSION['danger'] = $message;
		header("Location: task_10.php");
		exit;
	}
	
//добавление данных в БД
$sql = "INSERT INTO notes (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

$message = "Данные сохранены";
	$_SESSION['success'] = $message;

header("Location: task_10.php");
?>