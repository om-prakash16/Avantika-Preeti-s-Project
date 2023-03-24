<?php
include 'config.php';


// check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];

    // check if password and confirm password match
    if ($password == $conpassword) {
        // connect to the database
       

        // prepare SQL query to insert data into database
        $sql = "INSERT INTO user (name, username, email, contact, password) VALUES ('$name', '$username', '$email', '$contact', '$password')";

        // execute SQL query
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // close database connection
        mysqli_close($conn);
    } else {
        echo "Password and Confirm Password do not match";
    }
}
?>


?>
