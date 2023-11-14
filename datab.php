<?php
$name = $_POST['name'];
$username =$_POST['username']; 
$password = $_POST['password'];
$confirmPassword= $_POST['confirmPassword'];
$email= $_POST['email'];
$phone = $_POST['phone']; 
$bdate = $_POST['bdate']; 
//Database connection
$conn = new mysqli('localhost', 'root','root ','demo');
if($conn->connect_error) {
die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into test (name, username, password,confirmPassword,email,phone,bdate)values(?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("sssssis", $name, $username, $password, $confirmPassword, $email, $phone,$bdate);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();
}
?>