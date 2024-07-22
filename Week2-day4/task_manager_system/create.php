<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $mysqli->real_escape_string($_POST['task_name']);
    $taskDescription = $mysqli->real_escape_string($_POST['task_description']);

    $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$taskName', '$taskDescription')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
