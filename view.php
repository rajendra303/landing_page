<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "9528176114";
$db_name = "contact_form";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_select = "SELECT * FROM form_submissions";
$result = $conn->query($sql_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .edit-btn, .delete-btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 50%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        form select {
            appearance: none;
        }

        form button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #555;
        }

        @media (max-width: 768px) {
            .modal-content {
                width: 80%;
            }
        }
    </style>
</head>
<body>
<?php
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Action</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
        echo "<td>" . htmlspecialchars($row['message']) . "</td>";
        echo "<td><a class='edit-btn' href='javascript:void(0);' onclick='openEditModal(" . $row['id'] . ")'>Edit</a> ";
        echo "<a class='delete-btn' href='javascript:void(0);' onclick='confirmDelete(" . $row['id'] . ")'>Delete</a>";

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}
mysqli_close($conn);
?>

<script>
function openEditModal(id) {
    var modal = document.getElementById("editModal");
    var editForm = document.getElementById("editForm");

    var name = document.getElementById("editName");
    var email = document.getElementById("editEmail");
    var subject = document.getElementById("editSubject");
    var message = document.getElementById("editMessage");
    var editId = document.getElementById("editId");


    var recordData = {
        name: "Sample Name",
        email: "sample@example.com",
        subject: "Sample Subject",
        message: "Sample Message"
    };

    name.value = recordData.name;
    email.value = recordData.email;
    subject.value = recordData.subject;
    message.value = recordData.message;
    editId.value = id;

    modal.style.display = "block";
}


function confirmDelete(id) {
    var confirmDelete = confirm("Are you sure you want to delete this record?");
    
    if (confirmDelete) {
        window.location.href = 'delete.php?id=' + id;
    }
}
</script>





<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2>Edit Data</h2>
        <form action="edit.php" method="POST" id="editForm">
            <input type="hidden" id="editId" name="id">
            <label for="editName">Name</label>
            <input type="text" id="editName" name="name" placeholder="Your name..">
            <br>

            <label for="editEmail">Email</label>
            <input type="email" id="editEmail" name="email" placeholder="Email">
            <br>

            <label for="editSubject">Subject</label>
            <input type="text" id="editSubject" name="subject" placeholder="Subject">
            <br>

            <label for="editMessage">Message</label>
            <input type="text" id="editMessage" name="message" placeholder="Message">
            <br>

            <button type="submit">Save Changes</button>
        </form>
    </div>
</div>

</body>
</html>
