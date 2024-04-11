<?php
include('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // $row = $result->fetch_assoc();
    // $hashed_password = $row['password'];
    // if(password_verify($password, $hashed_password)) {
        echo "<script>
        alert('Welcome');
        window.location='home.php';
        </script>";
    } else {
        echo "<script>
        alert('Invalid username or password');
        window.location='loginform.php';
        </script>";
    }


$conn->close();
?>