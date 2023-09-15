<?php

$host = "localhost:3306";
$db = "christian97_db_app";
$user = "christian97_db_app";
$password = "?H0o6v4r0";

$link = mysqli_connect($host, $db, $user, $password,);

$db_response = [];
$db_response['success'] = 'not set';
if (!$link) {
    $db_response['success'] = false;
} else {
    $db_response['success'] = true;
}

echo json_encode($db_response);
