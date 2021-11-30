<?php   
    include("conn.php");

    $name = $_POST["addName"];
    $des = $_POST["addDes"];
    $sql = "INSERT INTO notes (Name, Description)
    VALUES ('$name', '$des')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: index.php"); 
    exit();

?>