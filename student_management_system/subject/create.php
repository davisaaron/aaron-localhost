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
        if (isset($_POST['sname'])) {
            $con=mysqli_connect($host='localhost',$user ='root',$password='',$database='studentinfo', $port = 3308);
            if ($con) {
                $sname=$_POST['sname'];
                $sindex=$_POST['sindex'];
                $sorder=$_POST['sorder'];
                $scolour=$_POST['scolour'];
                $sql="INSERT INTO subjects (subjectname,subjectindex,suborder,subcolour)VALUES('$sname','$sindex','$sorder','$scolour')";
                $res=mysqli_query($con,$sql);
            } else {
                echo "connection failed";
            }
            
        }
    ?>
    <table border="2">
    <th>Subject Registation</th>
    <tr>
        <td>
            <form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="sname">SubjectName</label>
                <input type="text" name="sname" id="sname">
                <br><br>
                <label for="sindex">SubjectIndex</label>
                <input type="text" name="sindex" id="sindex">
                <br><br>
                <label for="sorder">SubjectOrder</label>
                <input type="text" name="sorder" id="sorder">
                <br><br>
                <label for="scolour">SubjectColour</label>
                <input type="text" name="scolour" id="scolour">
                <br><br>
                <input type="submit" value="SUBMIT">
                <a href="index.php">SHOW ENTRYS</a>
            </form>
        </td>
    </tr>
    </table>
</body>
</html>