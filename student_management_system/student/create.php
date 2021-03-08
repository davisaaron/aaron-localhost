<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['fname'])){
    $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );
    if ($con) {
        echo "connection success";

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $subject=$_POST['sub'];
        
        $grade=$_POST['grade'];
        $section=$_POST['sec'];
        $address=$_POST['address'];
        $sql="INSERT INTO studentdeatils(firstname, lastname, gender,  grade, section, `address`) VALUES ('$fname','$lname','$gender','$grade','$section','$address')";
        $Result=mysqli_query($con,$sql);
        $lid=mysqli_insert_id($con);

        foreach ($subject as $value) {
            $sql1="INSERT INTO stdata_subjects(studentid,subjectid)VALUES('$lid','$value')";
            mysqli_query($con,$sql1);
        }

    }else {
        echo "connection failed";
    }
}

?>
<?php
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
       
        $sql = "SELECT * FROM stdata ";
        $s="SELECT * FROM subjects";
        $s1="SELECT * FROM stdata";
        $res = mysqli_query($con,$s);
        $res1 = mysqli_query($con,$s1);
        $result = mysqli_query($con,$sql);
?>

   
    
    <table border="1" >
        <th>Student Registation Form</th>
        <tr>
            <td>
                <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
                     <label for="fname">FRIST NAME</label>
                        <input type="text" name="fname" id="fname">
                        <br><br>
                        <label for="lname">LAST NAME</label>
                        <input type="text" name="lname" id="lname"value>
                        <br><br>
                        <label for="gender">GENDER</label>
                        <input type="radio" id="male" name="gender" value="male">Male
                        
                        <input type="radio" id="female" name="gender" value="female">Female
                        
                        <br><br>
                        
                        
                        <label >SUBJECT</label><br>
                            <?php
                            while($row1=mysqli_fetch_array($res)){
                            ?>
                            <input type="checkbox"  name="sub[]" value="<?php echo $row1['id'];?>"><?php echo $row1['subjectname'];?>
                            <br>
                            <?php
                            }
                            ?>
                        <!-- <input type="checkbox" name="sub[]" id="maths" value="maths">
                        <label for="maths">Maths</label><br>
                        <input type="checkbox" name="sub[]" id="tamil" value="tamil">
                        <label for="tamil">Tamil</label><br>
                        <input type="checkbox" name="sub[]" id="science" value="science">
                        <label for="science">Science</label><br> -->
                        <br><br>
                        <label for="grade">CLASS</label>
                        <select name="grade" id="grade" >
                            <?php
                            while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['gname'];?></option>
                            
                            <?php
                            }
                            ?>
                            
                        </select>
                        <select name="sec" id="grade" >
                      
                        <?php
                            while($ro=mysqli_fetch_array($res1)){
                            ?>
                            <option value="<?php echo $ro['id'];?>"><?php echo $ro['gorder'];?></option>
                            
                            <?php
                            }
                            ?>
                        </select>
                        <br><br>
                        <label for="address">ADDRESS</label>
                        <textarea name="address" id="address"></textarea>
                        <br><br>
                        <input type="submit">
                        <a href="index.php">SHOW ENTRY</a>
                        <br>
                        <a href="http://aaron.com/student_management_system/grade/index.php">VIEW GRADE</a>
                        <a href="http://aaron.com/student_management_system/subject/index.php">VIEW SUBJECT</a>


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