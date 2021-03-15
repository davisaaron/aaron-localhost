<?php
require_once('../config.php');
require_once('./../include/header.php');
require_once('./../include/sidebar.php');
?>
<style>
.ad{
    margin-left: 410px;

}
#a{
    margin-left: 1409px;;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
$id = $_GET['id'];
        $sql = "SELECT * FROM studentdeatils where id=$id";
        $result = mysqli_query($con,$sql);

        $sql1 = "SELECT subjectid
                FROM stdata_subjects
                WHERE studentid=$id";
        $result1= mysqli_query($con,$sql1);
        $array = array();
        while($row1 = mysqli_fetch_assoc($result1)){
                $array[] = $row1;

        }
        $ids = array_column($array, 'subjectid');         

?>

<?php
       $row = mysqli_fetch_assoc($result);  
       $grade=$row['grade'];
       $sql3 = "SELECT * 
              FROM stdata 
              WHERE id=$grade";

        $result3 = mysqli_query($con,$sql3);
        $row3 = mysqli_fetch_assoc($result3);  
      
?>
<br>
<button type="button" class="btn btn-primary" id="a"> Edit Student Info</button>
<div class="ad">
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      
    
      <div class="col-lg-12">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">First Name</th>
                <td width="2%">:</td>
                <td><?php echo $row['firstname']; ?></td>
              </tr>
              <tr>
                <th width="30%">Last Name	</th>
                <td width="2%">:</td>
                <td><?php echo $row['lastname']; ?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $row['gender']; ?></td>
              </tr>
              <tr>
                <th width="30%">Subjects</th>
                <td width="2%">:</td>
                <td>
                    <?php 
                      foreach($ids as $v){
                          $sql2 = "SELECT subjects.subjectname,subjects.subcolour
                                  FROM subjects
                                  INNER JOIN stdata_subjects
                                  ON subjects.id = $v";
                          $result2= mysqli_query($con,$sql2);
                          $row2 = mysqli_fetch_assoc($result2);
                          echo '<p style="color:'.$row2['subcolour'].'">'.$row2['subjectname'].'</p>';

                      }
                    ?>
                </td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $row['address']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
require_once('./../include/footer.php');
?>