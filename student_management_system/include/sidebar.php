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
        .dropdown {
            padding: 20px 8px 6px 16px; 
            text-decoration: none;
            font-size: 20px;
            color: red;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }
        .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: red;
            border-color: #4e555b;
            width: 100%;
        }
        .sidenav{
            height:100% ;
            width: 20%;
          /* //  margin-left: 1200px; */
            background-color: gray;
            position: fixed;
        }
        .dropdown-menu {
            position:relative;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 20px;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: right;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.15);
            border-radius: .25rem;
        }
        element.style {
            position: absolute;
            will-change: transform;
            top: 0px;
            left: 15px;
            transform: translate3d(1px, 44px, 0px);
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: grey;
            text-align: center;
        }
    </style>

    
</head>
<body>
    <?php
        $con=mysqli_connect($host='localhost',$user='root',$password='',$database='studentinfo',$port=3308);

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
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" ">
                    <span class="menu-collapsed">Students</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="http://aaron.com/student_management_system/student/create.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Create Students</span>
                </a>
                <a href="http://aaron.com/student_management_system/student/index.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Student List (<?php echo $rowcount; ?>)</span>
                </a>
            </div>
        </div>
        <div class="dropdown">
        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="menu-collapsed">Grades</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="http://aaron.com/student_management_system/grade/create.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Create Grade</span>
                </a>
                <a href="http://aaron.com/student_management_system/grade/index.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Grades List (<?php echo $rowcount2; ?>)</span>
                </a>
            </div> 
        </div>
        <div class="dropdown">
        <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="menu-collapsed">Subjects</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="http://aaron.com/student_management_system/subject/create.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Create Subject</span>
                </a>
                <a href="http://aaron.com/student_management_system/subject/index.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Subjects List (<?php echo $rowcount2; ?>)</span>
                </a>
            </div>  
        </div>
    </div>
</body>
</html>    

