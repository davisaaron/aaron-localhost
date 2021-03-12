<?php
require_once('../config.php');
require_once('./../include/header.php');
require_once('./../include/sidebar.php');
?>
<?php
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
        $id = $_GET['id'];
        $sql = "SELECT * FROM studentdeatils where id=$id";
        $result = mysqli_query($con,$sql);
?>

    <?php
        $row = mysqli_fetch_assoc($result);       
       
    ?>

        <h3>ID : <?php echo $row['id']; ?></h3>
        <h3>First Name :<?php echo $row['firstname']; ?></h3>
        <h3>Last Name :<?php echo $row['lastname']; ?></h3>
        <h3>Gender :<?php echo $row['gender']; ?></h3>
        <h3>Subjects : <?php echo $row['subject']; ?></h3>
        <h3>Grade :<?php echo $row['grade']; ?></h3>
        <h3>Section : <?php echo $row['section']; ?></h3>
        <h3>Address : <?php echo $row['address']; ?></h3>
    
    <?php
    }else{
        echo "connection lost";
    }

    ?>
    