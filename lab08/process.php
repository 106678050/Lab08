<!--http://localhost:8080/lab08/process.php -->
<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Yati Myat Aye' && $password == '106678050') 
{
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} 
else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>