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
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
        $id = $_GET['id'];
        $sql = "SELECT * FROM stdata where id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $gname = $row['gname'];
        $gcolour = $row['gcolour'];
        $gorder = $row['gorder'];

?>
 <table border="1" >
        <th>Student Registation Form</th>
        <tr>
            <td>
                <form action="<?php echo ($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="POST">
                     <label for="gname">GRADE NAME</label>
                        <input type="text" name="gname" id="gname" value="<?php echo ($gname);  ?>">
                        <br><br>
                        <label for="gcolour">GRADE COLOUR</label>
                        <input type="text" name="gcolour" id="gcolour" value="<?php echo ($gcolour);  ?>">
                        <br><br>
                        <label for="gorder">GRADE ORDER</label>
                        <input type="text" name="gorder" id="gorder" value="<?php echo ($gorder);  ?>">
                        <br><br>
                        <input type="submit" value="UPDATE">
                        <!-- //<input type="reset" value="RESET"> -->

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
