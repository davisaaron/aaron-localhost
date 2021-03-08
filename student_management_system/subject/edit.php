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
            $sql = "SELECT * FROM subjects where id=$id";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            $sname=$row['subjectname'];
            $sindex=$row['subjectindex'];
            $sorder=$row['suborder'];
            $scolour=$row['subcolour'];
    ?>
    <table border="2">
        <th>Subject Registation</th>
        <tr>
            <td>
                <form action="<?php echo ($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
                    <label for="sname">SubjectName</label>
                    <input type="text" name="sname" id="sname"value="<?php echo ($sname);  ?>">
                    <br><br>
                    <label for="sindex">SubjectIndex</label>
                    <input type="text" name="sindex" id="sindex"value="<?php echo ($sindex);  ?>">
                    <br><br>
                    <label for="sorder">SubjectOrder</label>
                    <input type="text" name="sorder" id="sorder"value="<?php echo ($sorder);  ?>">
                    <br><br>
                    <label for="scolour">SubjectColour</label>
                    <input type="text" name="scolour" id="scolour"value="<?php echo ($scolour);  ?>">
                    <br><br>
                    <input type="submit" value="SUBMIT">
                   
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