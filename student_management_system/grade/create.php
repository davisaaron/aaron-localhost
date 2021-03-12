<?php
include ('../index.php');
?>
<body>

    <?php

    if(isset($_POST['gname'])){
        $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
        if ($con) {
            //echo "connection success";

        
            $gname=$_POST['gname'];
            $gcolour=$_POST['gcolour'];
            $gorder=$_POST['gorder'];
        // print_r($_POST);
            $sql="INSERT INTO stdata (gname, gcolour, gorder) VALUES ('$gname','$gcolour','$gorder')";
            $Result=mysqli_query($con,$sql);
        }else {
            echo "connection failed";
        }
    }

?>
<table border="1" >
        <th>Student Registation Form</th>
        <tr>
            <td>
                <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
                     <label for="gname">GRADE NAME</label>
                        <input type="text" name="gname" id="gname">
                        <br><br>
                        <label for="gcolour">GRADE COLOUR</label>
                        <input type="text" name="gcolour" id="gcolour"value>
                        <br><br>
                        <label for="gorder">GRADE ORDER</label>
                        <input type="text" name="gorder" id="gorder"value>
                        <br><br>
                        <input type="submit">
                        <a href="index.php">SHOW ENTRYS</a>

                </form>
              
            </td>
        </tr>
     
    </table> 
