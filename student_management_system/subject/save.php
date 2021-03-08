<?php
$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
if ($con) {
    echo "connection success";

 
    $sname=$_POST['subjectname'];
    $sindex=$_POST['subjectindex'];
    $scolour=$_POST['subcolour'];
    $sorder=$_POST['suborder'];
   // print_r($_POST);
    $sql="INSERT INTO subjects (subjectname,subjectindex,suborder,subcolour) VALUES ('$sname','$sindex','$scolour','$sorder')";
    $Result=mysqli_query($con,$sql);
}else {
    echo "connection failed";
}
?>