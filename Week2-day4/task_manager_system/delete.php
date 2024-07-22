<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskId = $mysqli->real_escape_string($_POST['task_id']);

    $sql = "DELETE FROM tasks WHERE id='$taskId'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}

$mysqli->close();
?>
