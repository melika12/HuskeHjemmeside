<?php
    include("conn.php");

    $id = $_POST["noteId"];
    $name = $_POST["headline"];
    $des = $_POST["description"];

    $sql = "UPDATE notes SET Name='$name', Description='$des' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php"); 
    exit();
?>