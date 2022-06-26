<?php
$conn=mysqli_connect('localhost:3000', 'root', '', 'dit');
if(!$conn){
echo "ERROR ".mysqli_connect_error($conn);
}else{
    $sapID=$_POST['studentsap'];
    $sql="SELECT firstname from students where sap='$sapID'";
    $check=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($check);

    if($count>=1){
        header("Location: detailEditForm.php");
    }else{
        echo "No Match Found, Student does not exist";
    }
}