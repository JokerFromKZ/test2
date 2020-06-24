<?php

    $user = 'root';
    $password = 'root';
    $db = 'checks';
    $host = 'localhost';

    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $cond = $_POST['cond'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $other = $_POST['other'];

    $dsn = 'mysql:host='. $host .';dbname='.$db; // добавил свой порт к которому подключена база
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'INSERT INTO request(opt1, opt2, cond , other, date, time) VALUES (?,?, ? ,? ,?, ?)'; // подключаемся к базе юзер и добавляем определенные данные
    $query =  $pdo->prepare($sql); // подготовляем наш запрос
    $query->execute([$opt1, $opt2, $cond, $other, $date , $time ]);

