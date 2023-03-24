<?php
include 'config.php';
// check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get form data
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // login successful
        session_start();
        $_SESSION['username'] = $username;
        //header("Location: dashboard.php");
        echo "redirect your page where you ................ ";
        exit();
    } else {
        // login failed
        $error = "Invalid username or password";
    }

    // close database connection
    mysqli_close($conn);
}
?>

