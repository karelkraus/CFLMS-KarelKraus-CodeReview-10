<?php 

$localhost = "127.0.0.1";
$username = "root";
$pw = "";
$db = "cr10_karel_kraus_big_library";

$conn = new  mysqli($localhost, $username, $pw, $db);

if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

?>