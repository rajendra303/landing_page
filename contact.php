<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "9528176114";
$db_name = "contact_form";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO form_submissions (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form submission successful!";

header("Location: view.php");
            exit(); 


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
