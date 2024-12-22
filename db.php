<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'crud_app';

$conn = mysqli_connect($host, $user, $password, $database);
if ($conn) {
    //echo "Connect to database";
} else {
    echo "Not Connect to database";
}

?>