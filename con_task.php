<?php
$connection = mysqli_connect('localhost','root','','videoform');
if (!empty($connection->error)) {
    die("Connection could not establish");
};
// Check connection
// if ($connection->connect_error) {
//     die("Connection failed: " . $connection->connect_error);
// }
?>