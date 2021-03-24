<?php include 'library/database.php'; 
//session_start();
?>
<?php
    if(isset($_SESSION['name']) )
    {
        $t=$_SESSION['type'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CUET online registration system</title>
    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/custom.css" rel="stylesheet">
  </head>


  <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Chittagong University of Engineering and Technology</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
              
              <?php
                if(isset($_SESSION['name']) && $t=='student'):
            ?>
              <li class="nav-item">
            <a class="nav-link" href="courselist_index.php">Courses</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="teacherlist_index.php">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="regular.php">Register</a>
          </li>
            <?php endif; ?>
              
              <?php
                if(isset($_SESSION['name']) && $t=='teacher'):
            ?>
              <li class="nav-item">
            <a class="nav-link" href="courselist_index.php">Courses</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="search_student2.php">Students</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="search_student3.php">Search Students</a>
          </li>
            <?php endif; ?>
              
              <?php
                if(isset($_SESSION['name']) && $t=='administrator'):
            ?>
              <li class="nav-item">
            <a class="nav-link" href="courselist_index.php">Courses</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="search_student2.php">Students</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="search_student.php">Search</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="insertion.php">Add</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="deletion.php">Delete</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="search_student3.php">Check</a>
          </li>
            <?php endif; ?>
              
              
              <?php if(isset($_SESSION['name'])):?>
            <li class='nav-item'>
            <a class='nav-link' href='logout.php'>Logout</a>
            </li>
                  
              <?php endif; ?>
                          
            </ul>
            
            

      </div>
    </nav>
      