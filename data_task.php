<?php
include "con_task.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$videoFile = $_POST["videoFile"];
$agreement = $_POST["agreement"];
$comments = $_POST["comments"];

$query = "INSERT INTO userdata(firstName,lastName,email,videoFile,agreement,comments) VALUES ('$firstName','$lastName','$email','$videoFile','$agreement','$comments')";

// INSERT INTO userdata (agreement, choice_text, choice_value, is_checked)
// VALUES ('Yes, I Do', 'Yes, I Do', 'Yes, I Do', 1),
//        ('No, I Don\'t', 'No, I Don\'t', 'No, I Don\'t', 0);

$rs = $connection->query($query);

if($rs)
{
	echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Insertion Success</title>';
    // Include Bootstrap CSS
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
    echo '</head>';
    echo '<body>';
    // JavaScript for showing alert box
    echo '<script>';
    echo 'alert("Contact Records Inserted Successfully!");';
    echo 'window.location = "task.php";'; // Redirect to a page after showing the alert
    echo '</script>';
    echo '</body>';
    echo '</html>';
}

?>


// $stmt = $connection->prepare("INSERT INTO data (firstName, lastName, email, videoFile, agreement, comments) VALUES (?, ?, ?, ?, ?, ?)");
// $stmt->bind_param("ssssss", $firstName, $lastName, $email, $videoFile, $agreement, $comments);
// $stmt->execute();

// if ($stmt) {
//     echo "Contact Records Inserted";
// } else {
//     echo "Error: " . $sql . "<br>" . $connection->error;
// }

// $stmt->close();
// $connection->close();



