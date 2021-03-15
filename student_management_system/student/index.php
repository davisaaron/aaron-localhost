<?php
require_once('../config.php');
require_once('./../include/header.php');
require_once('./../include/sidebar.php');

?>

<?php

        $sql="SELECT studentdeatils.id,studentdeatils.firstname,studentdeatils.lastname,studentdeatils.gender,studentdeatils.subject,stdata.gname,stdata.gorder,studentdeatils.address 
        FROM studentdeatils 
        INNER JOIN stdata ON studentdeatils.grade=stdata.id  " ;
        $result = mysqli_query($con,$sql);  
?>
<style>
     .st{ 
        margin-left: 410px;
        margin-right: 100px;
    } 
</style>
<h1 style="color:red;margin-left:360px ;padding-top: 50px;">Student Info</h1>
<hr style="border:  solid red;margin-left:360px ;margin-right:10px;">

<div class="st">
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Grade</th>
            <th scope="col">Subject</th>
            <th scope="col">Address</th>
            <th colspan="3" style="text-align: center;">Action</th>
            

        </tr>
    </thead>
<?php
    while($row = mysqli_fetch_assoc($result)){
?> 
   <tbody>
        <tr> 
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['gname']; ?></td>
            <td><a href="./../student_subject/index.php?id=<?php echo $row['id']; ?>">Show</a></td>
            <td><?php echo $row['address']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            <td><a href="show.php?id=<?php echo $row['id']; ?>">Show</a></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
        
    <tbody>

<?php        
    }
?>
    </table>

<?php
require_once('./../include/footer.php');
?>
