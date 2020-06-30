<?php
header('Content-type: json/application');
$user = 'root';
$password = 'root';
$db = 'checks';
$host = 'localhost';

$dsn = 'mysql:host='. $host .';dbname='.$db; // добавил свой порт к которому подключена база
$pdo = new PDO($dsn, $user, $password); // подкл. к базе


$query = $pdo->prepare('SELECT * FROM `request` ');
$query->execute();


if($_GET['auth_key'] == 'junior_test'){
    $data = array();
    while($result =  $query->fetch(PDO::FETCH_ASSOC)){ // оформим каждую строку результата
        // как ассоциативный массив
        $data[] = $result; // допишем строку из выборки как новый элемент результирующего массива

    }
    echo json_encode($data);
}