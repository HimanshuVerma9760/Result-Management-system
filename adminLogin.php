<?php
session_start();
$conn = new mysqli("localhost", "root", "", "dit");
if (!$conn) {
    die("ERROR: " . $conn->connect_error);
} else {

    if (isset($_POST['email'])) {
        if (isset($_POST['pass'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $sql = "SELECT adminname from admintable where email='$email' and password='$pass'";
            $check = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($check);

            if ($count == 1) {
                $_SESSION['email'] = $email;
                header("Location: adminDashboard.php");
            } else {
                echo "This ADMIN does not exist";
            }
        } else {
            echo "Please enter Password";
        }
    } else {
        echo "please enter email";
    }
}