<?php
$conn = new mysqli("localhost", "root", "", 'dit');
if ($conn->connect_error) {
    die("ERROR: ". $conn->connect_error);
} else {

    if (isset($_POST['firstname'])) {
        if (isset($_POST['password'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $mothername = $_POST['mothername'];
            $fathername = $_POST['fathername'];
            $pincode = $_POST['pincode'];
            $branch = $_POST['branch'];
            $sap = $_POST['sap'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO students VALUES ('$firstname','$lastname','$mothername','$fathername','$pincode','$branch', '$sap', '$email', '$password')";

            if ($conn->query($sql)) {
                echo "Successfuly Added";
                $conn->close();
            } else {
                echo "ERROR :" . mysqli_error($conn);
            }
        } else {
            echo "Please Enter Password";
        }
    } else {
        echo "Please Enter name";
    }
}