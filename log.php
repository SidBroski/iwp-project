<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booksdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$one=$_POST['user'];
$two=$_POST['pass'];


$sql = "select * from user where username ='$one' && password='$two'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>