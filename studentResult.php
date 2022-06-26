<?php
$conn = mysqli_connect("localhost:3000", "root", "", "dit");
if (!$conn) {
    echo "error : " . mysqli_connect_error($conn);
} else {
    $db = $conn;
    $tableName = "result";
    $columns = ['firstname', 'lastname', 'Branch', 'pos', 'java', 'javaprac', 'dbms', 'dbmsprac', 'human', 'evs', 'percentage'];

    function fetch_data($db, $tableName, $columns)
    {
        if (empty($db)) {
            $msg = "Database connection error";
        } elseif (empty($columns) || !is_array($columns)) {
            $msg = "columns Name must be defined in an indexed array";
        } elseif (empty($tableName)) {
            $msg = "Table Name is empty";
        } else {
            $sap = $_POST['studentsap'];
            $columnName = implode(", ", $columns);
            $query = "SELECT " . $columnName . " FROM $tableName where sap='$sap'";
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
                                <th>Branch</th>
                                <th>Probability</th>
                                <th>JAVA</th>
                                <th>JAVA Practical</th>
                                <th>DBMS</th>
                                <th>DBMS Practical</th>
                                <th>Human Values</th>
                                <th>EVS</th>
                                <th>Total Percentage</th>
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
                                        <td><?php echo $data['Branch'] ?? ''; ?></td>
                                        <td><?php echo $data['pos'] ?? ''; ?></td>
                                        <td><?php echo $data['java'] ?? ''; ?></td>
                                        <td><?php echo $data['javaprac'] ?? ''; ?></td>
                                        <td><?php echo $data['dbms'] ?? ''; ?></td>
                                        <td><?php echo $data['dbmsprac'] ?? ''; ?></td>
                                        <td><?php echo $data['human'] ?? ''; ?></td>
                                        <td><?php echo $data['evs'] ?? ''; ?></td>
                                        <td><?php echo $data['percentage'] ?? ''; ?></td>
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