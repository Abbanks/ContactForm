<?php

include 'db_connection.php';

$conn = OpenCon();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$state = $_POST['state'];
$message = $_POST['message']; 




$sql = "INSERT INTO form (first_name, last_name, email, address, gender, phone_number, state, message) VALUES 
('$first_name', '$last_name', '$email', '$address', '$gender', '$phone_number', '$state', '$message')";

if($conn->query($sql) === TRUE){
    echo "Record inserted sucessfully";
}else {
    echo "ERROR:" . $sql. "<br>" . $conn->error;
}
 


CloseCon($conn);

?>