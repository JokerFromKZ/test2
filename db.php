<?php

header('Content-type: json/application');

$connect = mysqli_connect('localhost' , 'root', 'root', 'checks');

require 'function.php';

$type = $_GET['q'];

if($type === 'request'){

        requests($connect);


}
