<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
    .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: gray;
    overflow-x: hidden;
    padding-top: 20px;
    }
    .dropdown {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: red;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: center;
    cursor: pointer;
    outline: none;
    }
    .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: red;
    border-color: #4e555b;
}
</style>
</head>
<body>
<?php
$sql="SELECT * FROM studentdeatils";
$result = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);

$sql1="SELECT * FROM stdata";
$result1 = mysqli_query($con,$sql1);
$rowcount1=mysqli_num_rows($result1);

$sql2="SELECT * FROM subjects";
$result2 = mysqli_query($con,$sql2);
$rowcount2=mysqli_num_rows($result2);

?>
<div class="sidenav" >
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    STUDENT
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="http://aaron.com/student_management_system/student/">View Student(<?php echo $rowcount?>)</a>
    <a class="dropdown-item" href="http://aaron.com/student_management_system/student/create.php">Create Student</a>
  </div>
</div>
<br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    GRADE
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="http://aaron.com/student_management_system/grade/index.php">View Grade(<?php echo $rowcount1?>)</a>
    <a class="dropdown-item" href="http://aaron.com/student_management_system/grade/create.php">Create Grade</a>
  </div>
</div>
<br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    SUBJECT
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="http://aaron.com/student_management_system/subject/index.php">View Subject(<?php echo $rowcount?>)</a>
    <a class="dropdown-item" href="http://aaron.com/student_management_system/subject/create.php">Create Subject</a>
  </div>
</div>
</div>
</div>

</body>
</html>