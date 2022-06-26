<?php
// require_once("auth.php");
session_start();
$conn = mysqli_connect("localhost:3000", "root", "", "dit");
if (!$conn) {
    echo "error : " . mysqli_connect_error($conn);
} else {

    if (isset($_POST['email'])) {
        if (isset($_POST['pass'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $sql = "SELECT firstname from students where email='$email' and password='$pass'";
            $check = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($check);

            if ($count == 1) {
                $_SESSION['email'] = $email;
                header("Location: checkResult.php");
            } else {
                echo "user does not exist";
            }
        } else {
            echo "please enter password";
        }
    } else {
        echo "please enter email";
    }
}
