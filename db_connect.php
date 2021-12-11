<?php 


define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWD', '');
define('DATABASE', 'gym_db');

$conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE);

if($conn === false){
    die("Could not connect to mysql". mysqli_connect_error());
}
