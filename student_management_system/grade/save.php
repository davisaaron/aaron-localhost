<?php
$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
if ($con) {
    echo "connection success";

 
    $gname=$_POST['gname'];
    $gcolour=$_POST['gcolour'];
    $gorder=$_POST['gorder'];
    print_r($_POST);
    $sql="INSERT INTO stdata (gname, gcolour, gorder) VALUES ('$gname','$gcolour','$gorder')";
    $Result=mysqli_query($con,$sql);
}else {
    echo "connection failed";
}
?>