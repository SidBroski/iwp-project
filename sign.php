<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booksdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$one=$_POST['name'];
$two=$_POST['user'];
$three=$_POST['email'];
$four=$_POST['pass'];
$five=$_POST['phone'];
$six=$_POST['state'];
$seven=$_POST['address'];
$eight=$_POST['PIN'];


$sql = "INSERT INTO user (name, username, email, password, phone,state, address,pin)
VALUES ('$one', '$two', '$three','$four',$five,'$six','$seven',$eight)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>