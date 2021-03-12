<?php
require_once('../config.php');
require_once('./../include/header.php');
require_once('./../include/sidebar.php');
?>
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
   require_once('../config.php');
       
        $sql = "SELECT * FROM stdata ";
        $s="SELECT * FROM subjects";
        $s1="SELECT * FROM stdata";
        $res = mysqli_query($con,$s);
        $res1 = mysqli_query($con,$s1);
        $result = mysqli_query($con,$sql);
?>
<style>
     .st{ 
        margin-left: 500px;
       
    } 
</style>
<div class="st">
<table border="1" style="height :70%;">
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
                        
                        
                        <label >SUBJECT</label><a href="http://aaron.com/student_management_system/subject/create.php">ADD SUBJECT</a><br>
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
                        <label for="grade">CLASS</label><a href="http://aaron.com/student_management_system/grade/create.php">ADD GRADE</a><br>
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
                        
                        


                </form>
              
            </td>
        </tr>
                            
    </table>
</div>   
    
    
<?php
require_once('./../include/footer.php');
?>       


