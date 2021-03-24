<?php include 'library/database.php'; 
session_start();
if(!$_SESSION['name'])
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Course list </title>
    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/custom.css" rel="stylesheet">
  </head>

  <body>
      <?php include 'header.php'; ?>

    <div class="container">
        <div class="col-md-10">
        <div class="row">
        <div class="main-col">
        <div class="block">
        <div>
          <br/><br/>
          <img class="logo" class="img" src="images/cuet.png" height="120px" width="100px" />
      </div>
        <br/><br/>
        <h2 class="form-signin-heading">Courses offered by department of: </h2>
        <form action="courselist_index.php" method="post" class="form-login"><br>
        <input type="text" name="dept" class="form-control" required><br>
        <input type="submit" name="submit" value="search" class="btn btn-success"><br><br>
        </form>
        <?php if(isset($_POST['submit'])) : ?>
        <?php $username = $_SESSION['name'];
        $dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
        $d=0;
        if($dept=='CSE')
        {
            $d=4;
        }
        elseif($dept=='EEE')
        {
            $d=3;
        }
        $query1= "SELECT * FROM course_list WHERE course_dept='$d'; ";
        $result = $mysqli -> query($query1) or die($mysqli->error.__LINE__);
        $count = $result->num_rows;
        ?>
        <?php if($result->num_rows>0) : ?>
           <?php while($q=$result->fetch_assoc()) : ?>
                <li class="shout"> 
                    <?php if($q['course_dept']==03) : ?>
                        <?php echo 'EEE'; ?>
                    <?php endif; ?>
                    <?php if($q['course_dept']==04) : ?>
                        <?php echo 'CSE'; ?>
                    <?php endif; ?>
                    <?php echo $q['course_no']; ?>
                    <strong>
                    <?php echo $q['course_name']; ?>
                    </strong>  
                    </li>
                  <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
            </div>
             </div>
            </div>
        </div>
    </div>
      <footer>
        <div class="footer" >
      <p><li class="nav-item">
            <a class="nav-link" href="cuet.ac.bd">Chittagong University of Engineering and Technology - Official Website</a>
          </li></p>
    </div> 
      </footer>
  </body>
</html>
