<?php
    $con=mysqli_connect($host='localhost',$user='root',$password='',$database='studentinfo',$port=3308);
    if($con){
        echo "connection sucsess";
    }else{
        echo "connection failed";
    }
?>