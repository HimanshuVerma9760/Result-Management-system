    <?php
    $conn = mysqli_connect("localhost:3000", "root", "", "dit");
    if (!$conn) {
        echo "error : " . mysqli_connect_error($conn);
    } else {
        if (isset($_POST['firstname'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $branch = $_POST['Branch'];
            $sap = $_POST['sap'];
            $rollno = $_POST['rollno'];
            $pos = $_POST['pos'];
            $java = $_POST['java'];
            $javaprac = $_POST['javaprac'];
            $dbms = $_POST['dbms'];
            $dbmsprac = $_POST['dbmsprac'];
            $values = $_POST['values'];
            $evs = $_POST['evs'];
            $percentage = (($java / 2) + ($javaprac / 2) + ($dbms / 2) + ($dbmsprac / 2) + $values + $evs) / 4;
            $sql = "INSERT INTO result values('$firstname', '$lastname', '$branch', '$sap', '$rollno', '$pos', '$java', '$javaprac', '$dbms', '$dbmsprac', '$values', '$evs', '$percentage')";
            if ($conn->query($sql)) {
                echo "Successfuly Added";
                $conn->close();
            } else {
                echo "ERROR :" . mysqli_error($conn);
            }
        } else {
            echo "Enter Values";
        }
    }
    ?>
    