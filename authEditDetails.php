<?php
$conn=new mysqli('localhost', 'root', '', 'dit');
if(!$conn){
die ("ERROR ".$conn->connect_error);
}else{
    $sapID=$_POST['studentsap'];
    $sql="SELECT firstname from students where sap='$sapID'";
    $check=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($check);

    if($count>=1){
        header("Location: detailEditForm.php? studentsap=$sapID");
    }else{
        echo "No Match Found, Student does not exist";
    }
}