<?php
session_start();
$conn = new mysqli("localhost", "root", "", "dit");
if (!$conn) {
    echo "error : " . $conn->connect_error;
} else {

    if (isset($_POST['sap'])) {
        if (isset($_POST['pass'])) {
            $sap = $_POST['sap'];
            $pass = $_POST['pass'];

            $sql = "SELECT firstname from students where sap='$sap' and password='$pass'";
            $check = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($check);

            if ($count == 1) {
                $_SESSION['sap'] = $sap;
                header("Location: studentResult.php? studentsap=$sap");
            } else {
                echo "user does not exist";
            }
        } else {
            echo "please enter password";
        }
    } else {
        echo "please enter sap";
    }
}
?>