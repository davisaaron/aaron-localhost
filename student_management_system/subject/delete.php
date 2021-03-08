<?php
    $con=mysqli_connect($host='localhost',$user='root',$password='',$database='studentinfo',$port='3308');
    $id=$_GET['id'];
    echo $id;

    if($con){
        echo "connection success";
        $sql="DELETE FROM subjects WHERE id=$id";
        $res=mysqli_query($con,$sql);
        header("Location: show.php");
    }else{
        echo "connection failed";
    }
?>