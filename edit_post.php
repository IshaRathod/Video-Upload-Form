<?php
include "con_task.php";

$id = $_POST['id'];


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$videoFile = $_POST['videoFile'];
$agreement =  $_POST['agreement'];
$comments =  $_POST['comments'];
$status = 1;
$created_date = date('Y-m-d h:i:s');

$query = "UPDATE userdata SET firstName = '$firstName', lastName='$lastName', email='$email', videoFile='$videoFile', agreement='$agreement',comments='$comments', WHERE id = $id";

$executeQuery = $connection->query($query);
if($executeQuery){
    header("Location: table.php?msg=ID $id updated") ;
    //echo "Record Inserted Successfully";
} else {
    header("Location: task.php?msg=You have some errors in your form data");
}