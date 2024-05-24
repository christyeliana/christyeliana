<?php
include 'db.php';

$sql = "SELECT * FROM items";
$result = $conn->query($sql);

$items = array();

while($row = $result->fetch_assoc()) {
    $items[] = $row;
}

echo json_encode($items);

$conn->close();
?>
