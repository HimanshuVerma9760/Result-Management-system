<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "dit");
if (!$conn) {
    echo "error : " . mysqli_connect_error($conn);
} else {
    if (isset($_POST['studentsap'])) {
        $sap = $_POST['studentsap'];

        $sql = "SELECT sap from students where sap='$sap'";
        $check = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($check);

        if ($count == 1) {
            $_SESSION['email'] = $email;
            header("Location: studentResult.php? studentsap=$sap");
        } else {
            echo "This student does not exist";
        }
    } else {
        echo "please enter SaP";
    }
}
