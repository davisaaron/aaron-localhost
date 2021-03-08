<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="create.php">Create new entry </a>
<?php

$con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
    if($con){
      //  echo "connection success";
        $sql = "select * from stdata";
        $result = mysqli_query($con,$sql);
       // echo $result;
     //  echo mysqli_num_rows($result);
?>

    <table border="2" ;style="width:100%";color:gray>
        <th colspan="7" style="color:red;">STUDENT INFO</th>
        <tr>
            <th>ID</th>
            <th>GRADE NAME</th>
            <th>GRADE COLOUR</th>
            <th>GRADE ORDER</th>
            <th colspan="3">ACTION</th>
            

        </tr>
<?php
    $x=1;
    while($row = mysqli_fetch_assoc($result)){
?> 
       <tr>
        <td><?php echo $x; ?></td>
        <td><?php echo $row['gname']; ?></td>
        <td><?php echo $row['gcolour']; ?></td>
        <td><?php echo $row['gorder']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
        <td><a href="show.php?id=<?php echo $row['id']; ?>">VIEW</a></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">UPDATE</a></td>
        
       </tr>

<?php   
$x++;     
    }
?>
    </table>

<?php
    }else{
        echo "connection failed";
    }
    
?>

</body>
</html>
