<?php
$conn = new mysqli("localhost", "root", "", "dit");
if (!$conn) {
    die("ERROR " . $conn->connect_error);
} else {
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $branch = $_POST['Branch'];
        $sap = $_POST['sap'];
        $pos = $_POST['pos'];
        $java = $_POST['java'];
        $javaprac = $_POST['javaprac'];
        $dbms = $_POST['dbms'];
        $values = $_POST['values'];
        $evs = $_POST['evs'];
        $percentage = (($java / 2) + ($javaprac / 2) + $dbms + $values + $evs) / 4;
        $sql = "SELECT sap from students where sap='$sap'";
        $check = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($check);

        if ($count == 1) {
            $sql = "INSERT INTO result values('$firstname', '$lastname', '$branch', '$sap', '$pos', '$java', '$javaprac', '$dbms', '$values', '$evs', '$percentage')";
            if ($conn->query($sql)) {
                echo "Successfuly Added";
            } else {
                echo "ERROR :" . mysqli_error($conn);
            }
        } else {
            echo "<script> alert('The student must be registered first')</script>";
        }
    } else {
        echo "Enter Values";
    }
}
$conn->close();
?>