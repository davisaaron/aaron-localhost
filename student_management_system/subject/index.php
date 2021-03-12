<?php
include ('../index.php');
?>
    <a href="create.php">CREATE NEW SUBJECT</a>
    <?php
        $con=mysqli_connect($host='localhost',$user='root',$password='',$database='studentinfo',$port='3308');
        if($con){
        $sql="SELECT * FROM subjects";
        $res=mysqli_query($con,$sql);
    ?>
    <table border="2">
        <th colspan="9">Subject info</th>
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>SubjectName</th>
            <th>SubjectIndex</th>
            <th>SubjectOrder</th>
            <th>SubjectColour</th>
            <th colspan="3">ACTION</th>
        </tr>
        <?php
            $x=1;
            while ($row=mysqli_fetch_assoc($res)) {
        ?>
        <tr>
            <td><?php echo $x;?></td>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['subjectname']?></td>
            <td><?php echo $row['subjectindex']?></td>
            <td><?php echo $row['suborder']?></td>
            <td><?php echo $row['subcolour']?></td>
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
