<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "customer";

$connection = mysqli_connect($host, $username, $password, $dbName);

if ($connection) {
    echo "Connected!";

} else {
    die("Connection faild" . mysqli_connect_error());
}

?>