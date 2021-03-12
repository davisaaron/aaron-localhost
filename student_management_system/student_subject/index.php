
<?php
include ('../index.php');
?>
<?php

$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
    if($con){
      
        $sid = $_GET['id'];
        $sql="SELECT subjects.subjectname,stdata_subjects.id
        FROM stdata_subjects 
        INNER JOIN subjects 
        ON stdata_subjects.subjectid=subjects.id
        WHERE  stdata_subjects.studentid = $sid  " ;
        $result = mysqli_query($con,$sql);        
?>

 <a href="edit.php?id=<?php echo $sid; ?>">ADD</a>  
<!-- <a href="edit1.php">CREATE NEW SUBJECT</a> -->
    <table border="2" ;style="width:100%";color:gray>
        <th colspan="3" style="color:red;">Student Info</th>
        <tr>
            
            <th>STUDENT ID</th>
            <th>SUBJECT NAEME</th>
            <th >ACTION</th>
        </tr>
<?php
    while($row1 = mysqli_fetch_assoc($result)){
?> 
       <tr>
        <td><?php echo $sid; ?></td>
        <td><?php echo $row1['subjectname']; ?></td>
        <td><a href="delete.php?id=<?php echo $row1['id']; ?>">Delete</a></td>
       </tr>

<?php        
    }
?>
    </table>

<?php
    }else{
        echo "connection failed";
    }
    
?>









