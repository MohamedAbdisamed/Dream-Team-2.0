
<?php
/*
$databaseName = "sql11495034";
$serverName = "sql11.freesqldatabase.com";
$userName = "sql11495034";
$pass = "rJKfi5M9kk"; 
*/

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("sql11.freesqldatabase.com", "sql11495034", "rJKfi5M9kk", "sql11495034");
    
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
$telephone = $_REQUEST['telephone'];
    
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO Users VALUES ('$first_name','$last_name','$address','$email','$telephone')";


if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$telephone\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
    
// Close connection
mysqli_close($conn);


/*
include ("mysqlconnect.php");

$connect = new mysqli($serverName, $userName, $pass, $databaseName);

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $level = $_POST['level'];
    $gender = $_POST['gender'];

    $query = "insert into Users (first_name, last_name, address, email, telephone) values ('$first_name', '$last_name', '$address', '$email', '$telephone')";

    $query_2 = "insert into User_stat (height, weight, age, level, gender) values ('$height', '$weight', '$age', '$level', '$gender')";

    if (mysqli_query($connect, $query)) {

        echo "<h1 class='center'>Bruger oprettet</h1>";
    }
}


if(isset($_POST['submit'])) {

    if($_POST['first_name'] !== "" && $_POST['last_name'] !== "" && $_POST['address'] !== "" && $_POST['email'] !== "" && $_POST['telephone'] !== "" && $_POST['height'] !== "" && $_POST['weight'] !== "" && $_POST['age'] !== "" && $_POST['level'] !== "" && $_POST['gender'] !== "") {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $age = $_POST['age'];
        $level = $_POST['level'];
        $gender = $_POST['gender'];

        $query = "insert into Users (first_name, last_name, address, email, telephone) values ('$first_name', '$last_name', '$address', '$email', '$telephone')";

        $query_2 = "insert into User_stat (height, weight, age, level, gender) values ('$height', '$weight', '$age', '$level', '$gender')";

        if (mysqli_query($connect, $query)) {
            
            echo "<h1 class='center'>Bruger oprettet</h1>";
        }
    }   
} else {
    echo '<script language="javascript">';
    echo 'alert("Fejl, tomme felter")';
    echo '</script>';
} */

?>