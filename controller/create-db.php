<?php
require_once("../modeldatabase.php");

$connection = new  mysqli($host, $username, $password);

if($connection->connect_error) {
    die("Error:" . $connection->connect_error);
}
else {
    echo "success: " . $connection->host_info;
}

$connection->close();