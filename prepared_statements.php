<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO student  (name, Email, Gender,adress,mobile,batch) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $gender, $address,$mobile,$batch);

// set parameters and execute
$name= "John";
$email = "john@example.com";
$gender = "male";
$address ="Motijheel";
$mobile = '0192036251';
$batch = "2";
$stmt->execute();

$name = "Mary";
$email ="john@gmail.com";
$gender = "male";
$address = "kakril";
$mobile = "01538625417";
$batch = "3";
$stmt->execute();
$name = "Rayan";
$email ="rayan@gmail.com";
$gender = "male";
$address = "paltan";
$mobile = "01538625417";
$batch = "5";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>