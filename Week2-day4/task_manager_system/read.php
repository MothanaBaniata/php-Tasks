<?php
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. "ds - Task Name: " . $row["task_name"]. " - Description: " . $row["task_description"]. "<br>";
    }
} else {
    echo "0 results";
}

$mysqli->close();
?>
