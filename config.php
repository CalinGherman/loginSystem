<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'car_application';

$connection = mysqli_connect($server_name, $user_name, $password, $db_name);

if(!$connection){
    die('connection failed' . mysqli_error($connection));
}


date_default_timezone_set('UTC');

session_start();

function filterInput($data){

    $data = trim($data);

    $data = strip_tags($data);

    $data = stripslashes($data);
    
    $data = htmlspecialchars($data);

    return $data;

}

?>
