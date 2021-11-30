<?php
    include("conn.php");

    $id = $_POST["noteIdDel"];

    $sql = "DELETE FROM notes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php"); 
    exit();

?>