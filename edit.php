<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "9528176114";
$db_name = "contact_form";

// Create a new database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editedName = $_POST['name'];
    $editedEmail = $_POST['email'];
    $editedSubject = $_POST['subject'];
    $editedMessage = $_POST['message'];
    $id = $_POST['id'];

    $sql_update = "UPDATE form_submissions 
                   SET name = '$editedName', email = '$editedEmail', 
                       subject = '$editedSubject', message = '$editedMessage' 
                   WHERE id = $id";
    
    if ($conn->query($sql_update) === TRUE) {
        echo "Record updated successfully";

        header("Location: view.php");
            exit(); 

    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>
