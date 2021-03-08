<?php
$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
$id=$_GET['id'];
echo $id;
if ($con) {
    echo "connection success";

$sql="DELETE FROM `stdata_subjects` WHERE `id`=$id";
$Result=mysqli_query($con,$sql);
header("Location: index.php");
}else {
    echo "connection failed";
}
?>