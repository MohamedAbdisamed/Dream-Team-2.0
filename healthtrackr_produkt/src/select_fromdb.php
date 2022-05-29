<?php 
    include 'mysqlconnect.php'; 

    
$sql = "SELECT * FROM kalender ORDER BY start";
$result = $conn->query($sql);
//echo $result;
$myArray = array();
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;
    }
} 
else 
{
    echo "0 results";
}
echo json_encode($myArray);
?>