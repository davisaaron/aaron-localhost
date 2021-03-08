<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php?>
<?php
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
        
       $sid = $_GET['id'];
       
    /*     $s = "SELECT * FROM subjects";
        $resul = mysqli_query($con,$s);
        $ro = mysqli_fetch_assoc($resul);  */
        $sql = "SELECT * FROM subjects  ";
        $result = mysqli_query($con,$sql);

        $sql1 = "SELECT * FROM stdata_subjects where studentid=$sid";
        $result1 = mysqli_query($con,$sql1);
       


?>

 <table border="1" width="20%" height="100%">
        <th>Student Registation Form</th>
        <tr>
            <td>
                <form action="save.php" method="POST">
                     <input type="hidden" name="studentid" value="<?php echo $sid; ?>">
                        
                        
                     
                        <label for="sub">SUBJECT</label>
                        <br>
                     
                         <?php      
            foreach($result as $v1){
        ?>
            <label for="sub "><?php echo $v1['subjectname']; ?></label>
            <input type="checkbox" id="sub" name="sub[]" value="<?php echo $v1['id']; ?>"
            <?php 
             foreach($result1 as $v){
			if($v1['id'] == $v['subjectid']){
				echo 'checked';
			}
            }
				
            }
        
        ?>>
                        
                        <br><br>
                        
                        <input type="submit">
                        

                </form>
              
            </td>
        </tr>
     
    </table>

    
    
    <?php
    }else{
        echo "connection lost";
    }

    ?>

</body>
</html>
