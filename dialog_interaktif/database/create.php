<?php
include 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];

$sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
