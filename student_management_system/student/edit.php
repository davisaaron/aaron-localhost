<?php
include ('../index.php');
?>
<?php
   $con=mysqli_connect($host = 'localhost', $user = 'root', $password = '', $database = 'studentinfo', $port = 3308 );

    if($con){
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM studentdeatils where id=$id";
        $s = "SELECT * FROM stdata ";
        $resul = mysqli_query($con,$s);
        $ro = mysqli_fetch_assoc($resul);
        $sql2 = "SELECT * FROM subjects  ";
        $result = mysqli_query($con,$sql2);

        $sql1 = "SELECT * FROM stdata_subjects where studentid=$id";
        $result1 = mysqli_query($con,$sql1);





        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $gender=$row['gender'];
        $subject=$row['subject'];
        $subarr=explode(',',$subject);
        $grade=$row['grade'];
        $section=$row['section'];
        $address = $row['address'];

?>

 <table border="1" width="20%" height="100%">
        <th>Student Registation Form</th>
        <tr>
            <td>
                <form action="<?php echo ($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="POST">
                     <label for="fname">FRIST NAME</label>
                        <input type="text" name="fname" id="fname"  value="<?php echo ($firstname);  ?>">
                        <br><br>
                        <label for="lname">LAST NAME</label>
                        <input type="text" name="lname" id="lname" value="<?php echo ($lastname); ?>">
                        <br><br>
                        <label for="gender">GENDER</label>
                        <input type="radio" id="male" name="gender" value="male" <?php if($gender=='male'){echo 'checked';}?>>Male
                        
                        <input type="radio" id="female" name="gender" value="female"<?php if($gender=='female'){echo 'checked';}?>>Female
                        
                        <br><br>
                        
                        
                        <label >SUBJECT</label><br>
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
                        <label for="grade">CLASS</label>
                        <select name="grade" id="grade" >
                        <?php
                            while($ro=mysqli_fetch_assoc($resul)){
                            ?>
                            <option value="<?php echo $ro['id'];?>"<?php if($grade==$ro['id']){echo 'selected';}?>><?php echo $ro['gname'];?></option>
                            
                            <?php
                            }
                            ?>
                        </select>
                        <select name="sec" id="grade" >
                            <option value="">Section</option>
                            <option value="A"<?php if($section=='A'){echo 'selected';}?>>A</option>
                            <option value="B"<?php if($section=='B'){echo 'selected';}?>>B</option>
                            <option value="C"<?php if($section=='C'){echo 'selected';}?>>C</option>
                            <option value="D"<?php if($section=='D'){echo 'selected';}?>>D</option>
                        </select>
                        <br><br>
                        <label for="address">ADDRESS</label>
                        <textarea name="address" id="address" value=""><?php echo $row['address'];?></textarea>
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


