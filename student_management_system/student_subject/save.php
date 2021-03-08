<?php
$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
if($con){
    $sid=$_POST['studentid'];
    $subject=$_POST['sub'];
    foreach($subject as $v){

        if(!empty($_POST['sub'])){
            $sql="DELETE FROM `stdata_subjects` WHERE $sid=studentid";
             $result=mysqli_query($con,$sql);
             foreach($subject as $v1){
                $sql1="INSERT INTO stdata_subjects(studentid,subjectid) VALUES ($sid ,$v1)";
                $result=mysqli_query($con,$sql1); 
             }     
        }
        else{
            echo "filed";
        }
    }
   
    }
    else{
        echo "connectition lost";
}
?>