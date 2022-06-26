<?php
$conn=mysqli_connect('localhost:3000', 'root', '', 'dit');
if(!$conn){
    echo "Error: ".mysqli_connect_error($conn);
}else{
    if (isset($_POST['firstname'])) {
        if (isset($_POST['password'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $mothername = $_POST['mothername'];
            $fathername = $_POST['fathername'];
            $pincode = $_POST['pincode'];
            $branch = $_POST['branch'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "UPDATE students set firstname='$firstname', lastname='$lastname', mothername='$mothername', fathername='$fathername', pincode='$pincode', branch='$branch', email='$email', password='$password'";

            if (mysqli_query($conn, $sql)) {
                echo "Successfuly Updated";
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