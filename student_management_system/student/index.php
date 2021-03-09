<?php
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

        $sql="SELECT studentdeatils.id,studentdeatils.firstname,studentdeatils.lastname,studentdeatils.gender,studentdeatils.subject,stdata.gname,stdata.gorder,studentdeatils.address 
        FROM studentdeatils 
        INNER JOIN stdata ON studentdeatils.grade=stdata.id  " ;
        $result = mysqli_query($con,$sql);

    
        
?>
<a href="create.php">CREATE NEW ENTRY</a>
    <table border="2" ;style="width:100%";color:gray>
        <th colspan="12" style="color:red;">Student Info</th>
        <tr>
            <th>ID</th>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>subject</th>
            <th>grade</th>
            <th>section</th>
            <th>address</th>
            <th colspan="3">Action</th>
            

        </tr>
<?php
    while($row = mysqli_fetch_assoc($result)){
?> 
       <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><a href="http://aaron.com/student_management_system/student_subject/index.php?id=<?php echo $row['id']; ?>">show</a></td>
        <td><?php echo $row['gname']; ?></td>
        <td><?php echo $row['gorder']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        <td><a href="show.php?id=<?php echo $row['id']; ?>">Show</a></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
       </tr>

<?php        
    }
?>
    </table>


</body>
</html>