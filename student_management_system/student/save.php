<?php
$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
if ($con) {
    echo "connection success";

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $subject=$_POST['sub'];
    $sub= implode(',', $subject);
    $grade=$_POST['grade'];
    $section=$_POST['sec'];
    $address=$_POST['address'];
    $sql="INSERT INTO studentdeatils(firstname, lastname, gender, subject, grade, section, address) VALUES ('$fname','$lname','$gender','$sub','$grade','$section','$address')";
    $Result=mysqli_query($con,$sql);
}else {
    echo "connection failed";
}
?>