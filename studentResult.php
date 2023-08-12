<?php
include "./stuLoginNav.html";
$conn = new mysqli("localhost", "root", "", "dit");
if (!$conn) {
    die("ERROR: " . $conn->connect_error);
} else {
    $db = $conn;
    $tableName = "result";
    $columns = ['firstname', 'lastname', 'Branch', 'pos', 'java', 'javaprac', 'dbms', 'human', 'evs', 'percentage'];

    function fetch_data($db, $tableName, $columns)
    {
        if (empty($db)) {
            $msg = "Database connection error";
        } elseif (empty($columns) || !is_array($columns)) {
            $msg = "columns Name must be defined in an indexed array";
        } elseif (empty($tableName)) {
            $msg = "Table Name is empty";
        } else {
            $sap = $_GET['studentsap'];
            $columnName = implode(", ", $columns);
            $query = "SELECT " . $columnName . " FROM $tableName where sap='$sap'";
            $result = $db->query($query);

            if ($result == true) {
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg = $row;
                } else {
                    $msg = "Student exist, but Result not uploaded yet";
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
</head>

<body>
    <!-- <div>
        <a class="btn btn-primary" href='checkResult.php'>home</a>
    </div> -->
    <div>
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered center">
                        <thead>
                            <tr>
                                <th>S no.</th>
                                <th>Probability</th>
                                <th>JAVA</th>
                                <th>JAVA Practical</th>
                                <th>DBMS</th>
                                <th>Human Values</th>
                                <th>EVS</th>
                                <th>%</th>
                        </thead>
                        <tbody>
                            <?php
                            if (is_array($getData)) {
                                $sn = 1;
                                foreach ($getData as $data) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $sn; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['pos'] ?? ''; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['java'] ?? ''; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['javaprac'] ?? ''; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['dbms'] ?? ''; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['human'] ?? ''; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['evs'] ?? ''; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['percentage'] . '%' ?? ''; ?>
                                        </td>
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