<?php
$conn = mysqli_connect("localhost:3000", "root", "", "dit");
if (!$conn) {
    echo "error : " . mysqli_connect_error($conn);
} else {
    $db = $conn;
    $tableName = "students";
    $columns = ['firstname', 'lastname', 'mothername', 'fathername', 'pincode', 'branch', 'email'];

    function fetch_data($db, $tableName, $columns)
    {
        if (empty($db)) {
            $msg = "Database connection error";
        } elseif (empty($columns) || !is_array($columns)) {
            $msg = "columns Name must be defined in an indexed array";
        } elseif (empty($tableName)) {
            $msg = "Table Name is empty";
        } else {
            $firstname = $_POST['search'];
            $columnName = implode(", ", $columns);
            $query = "SELECT " . $columnName . " FROM $tableName where firstname='$firstname'";
            $result = $db->query($query);

            if ($result == true) {
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg = $row;
                } else {
                    $msg = "No Data Found";
                }
            } else {
                $msg = mysqli_error($db);
            }
        }
        return $msg;
    }
}
$getData = fetch_data($conn, $tableName, $columns);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="background.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered center">
                        <thead>
                            <tr>
                                <th>S no.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mother Name</th>
                                <th>Father Name</th>
                                <th>Pincode</th>
                                <th>Branch</th>
                                <th>Email</th>
                        </thead>
                        <tbody>
                            <?php
                            if (is_array($getData)) {
                                $sn = 1;
                                foreach ($getData as $data) {
                            ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $data['firstname'] ?? ''; ?></td>
                                        <td><?php echo $data['lastname'] ?? ''; ?></td>
                                        <td><?php echo $data['mothername'] ?? ''; ?></td>
                                        <td><?php echo $data['fathername'] ?? ''; ?></td>
                                        <td><?php echo $data['pincode'] ?? ''; ?></td>
                                        <td><?php echo $data['branch'] ?? ''; ?></td>
                                        <td><?php echo $data['email'] ?? ''; ?></td>
                                    </tr>
                                <?php
                                    $sn++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="8">
                                        <?php echo $getData; ?>
                                    </td>
                                <tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>