<!--http://localhost:8080/lab08/welcome.php -->
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
</head>
<body>

    <?php include 'header.inc'; ?>

    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>

    <p>You have successfully logged in.</p>

    <?php include 'footer.inc'; ?>

</body>
</html>
