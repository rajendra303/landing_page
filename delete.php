<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "9528176114";
$db_name = "contact_form";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql_delete = "DELETE FROM form_submissions WHERE id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
<script>
function confirmDelete(id) {
    var confirmDelete = confirm("Are you sure you want to delete this record?");
    
    if (confirmDelete) {
        window.location.href = 'delete.php?id=' + id;
    }
}
</script>

