<?php
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
        $id = $_GET['id'];
        $sql = "SELECT * FROM subjects where id=$id";
        $result = mysqli_query($con,$sql);
?>

    <?php
        $row = mysqli_fetch_assoc($result);       
       
    ?>

        <h3>ID : <?php echo $row['id']; ?></h3>
        <h3>SUBJECT NAME :<?php echo $row['subjectname']; ?></h3>
        <h3>SUBJECT INDEX :<?php echo $row['subjectindex']; ?></h3>
        <h3>SUBJECT ORDER :<?php echo $row['suborder']; ?></h3>
        <h3>SUBJECT COLOUR :<?php echo $row['subcolour']; ?></h3>
        
    
    <?php
    }else{
        echo "connection lost";
    }

    ?>