<?php
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
        $id = $_GET['id'];
        $sql = "SELECT * FROM stdata where id=$id";
        $result = mysqli_query($con,$sql);
?>

    <?php
        $row = mysqli_fetch_assoc($result);       
       
    ?>

        <h3>ID : <?php echo $row['id']; ?></h3>
        <h3>First Name :<?php echo $row['gname']; ?></h3>
        <h3>Last Name :<?php echo $row['gcolour']; ?></h3>
        <h3>Gender :<?php echo $row['gorder']; ?></h3>
        
    
    <?php
    }else{
        echo "connection lost";
    }

    ?>