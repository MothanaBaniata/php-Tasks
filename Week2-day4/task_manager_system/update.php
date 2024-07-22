<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskId = $mysqli->real_escape_string($_POST['task_id']);
    $taskName = $mysqli->real_escape_string($_POST['task_name']);
    $taskDescription = $mysqli->real_escape_string($_POST['task_description']);

    $sql = "UPDATE tasks SET task_name='$taskName', task_description='$taskDescription' WHERE id='$taskId'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

$mysqli->close();
?>
