<?php 
    include 'mysqlconnect.php'; 
    if(isset($_POST['id'])){
        $sql = "UPDATE kalender SET title=title, start=start, end=end, description=description
        WHERE id=id";
        $statement = $conn->prepare($sql);
        
        $statement->execute(
            array(
                'title' => $_POST['title'],
                'start' => $_POST['start'],
                'end' => $_POST['end'],
                'description' => $_POST['description'],
                'id' => $_POST['id'],
            )
        );
    }
   
?>