<?php 
    include("conn.php");
    $sql = "SELECT ID, Name, TimeOfEvent, Description FROM notes";
    $results = $conn->query($sql);
    
?>
<html>
    <head>
        <title>Husk!</title>
        <link rel="stylesheet" href="style.css"> 
        <script type="text/javascript" src="edit.js"></script>
    </head>
    <body>
        <button id="addBtn" onclick="addNote()">Add Note</button><br>
        <?php foreach ($results as $result) { ?>
            <div class="note"> 
                <?php echo $result["TimeOfEvent"] ?>
                <button id='del<?php echo $result['ID']?>' class='del' onclick="deleteNote(<?php echo $result['ID']?>)">X</button>
                <button id='edit<?php echo $result['ID']?>' class='edit' onclick="editNote(<?php echo $result['ID']?>, '<?php echo $result['Name']?>', '<?php echo $result['Description']?>')">Edit</button><br>
                <p class='name'><?php echo $result["Name"] ?></p>
                <p> Description:</p><br><?php echo $result["Description"] ?><br>

            </div>  
        <?php } ?>
        <!--<div id="myModalEdit" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="edit.php" method="post">

                    <label for="name">Headline:</label><br>
                    <input type="text" id="headline" name="headline"><br>

                    <label for="description">Description:</label><br>
                    <input type="text" id="description" name="description"><br><br>

                    <input type="hidden" id="noteId" name="noteId" ><br>

                    <input type="submit" value="Submit">
                </form> 
            </div>
        <div>
        <div id="delPop" class="modalDel">
            <div class="modal-contentDel">
                <span class="closeDel">&times;</span>
                <form action="delete.php" method="post">
                    <input type="hidden"  id="noteIdDel" name="noteIdDel" ><br>
                    <input type="submit" value="Yes">
                </form> 
            </div>

        </div>-->
        <div id="addPop" class="modalAdd">
            <div class="modal-contentAdd">
                <span class="closeAdd">&times;</span>
                <form action="add.php" method="post">
                    <label for="name">Headline:</label><br>
                    <input type="text" id="addName" name="addName"><br>

                    <label for="description">Description:</label><br>
                    <input type="text" id="addDes" name="addDes"><br><br>

                    <input type="submit" value="Submit">
                </form> 
            </div>

        </div>
        
    </body>
</html> 