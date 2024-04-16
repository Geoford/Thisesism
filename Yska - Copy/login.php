<?php
include('connection.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_table WHERE username='$username'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    if (password_verify($password, $hashed_password)) {
        echo "<script>
        alert('Invalid username or password');
        window.location='login_form.php';
        </script>";
    } else {
        $_SESSION["username"] = $username;
        echo "<script>
        alert('Welcome');
        window.location='landing_page.php';
        </script>";  
    }
} else {
    echo "<script>
    alert('Invalid username or password');
    window.location='login_form.php';
    </script>";
}

?>