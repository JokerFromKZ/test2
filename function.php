<?php
function requests($connect) {
    $requests = mysqli_query($connect, 'SELECT * FROM `request`');

    $requests_list = [];

    while($request = mysqli_fetch_all($requests) ) {
        $requests_list[] = $request;
    }

    echo json_encode($requests_list);
};