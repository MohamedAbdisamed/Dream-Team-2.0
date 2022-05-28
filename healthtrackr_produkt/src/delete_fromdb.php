<?php 
    include 'mysqlconnect.php'; 
    if(isset($_POST['id'])){
        $sql = "DELETE FROM kalender WHERE id=:id";
        $statement = $conn->prepare($sql);
        $statement->execute(
            array(
                ':id' => $_POST['id'],
            )
        );
    }
   
?>