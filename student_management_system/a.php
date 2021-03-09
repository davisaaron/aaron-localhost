
<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
    body {
    font-family: "Lato", sans-serif;
    }
    form{
			width: 50%;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 15px;
			margin:auto;
		}
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		textarea, select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}	
			

    /* Fixed sidenav, full height */
    .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
    }

    /* Main content */
    .main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
    background-color: green;
    color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    
    

    /* Some media queries for responsiveness */
    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
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
<div class="sidenav">
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

<div class="main">

</div>

<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
    }
</script>

</body>
</html> 




























	<!-- <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <th scope="row"><?=$student['id']?></td>
                <td><?=$student['name']?></td>
                <td><?=$student['age']?></td>
                <td><?=$student['email']?></td>
                <td><a href="update.php?id=<?=$student['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a></td>
                <td><a href="delete.php?id=<?=$student['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table> -->
	

Index.php
Displaying Index.php.