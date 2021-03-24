<?php include 'library/Database.php'; ?>
<?php
session_start();
if(!$_SESSION['name'])
{

        header("location:login_index.php");
    
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/login.css" rel="stylesheet">
  </head>

  <body>
<?php include 'header.php'; ?>
      
<div class="container">
        <div class="col-md-10">
            <div class="row">
                <div class="main-col">
                    <div class="block">
                        <div class="logo">
                          <br/><br/><br/><br/>
                          <img src="images/cuet.png" height="120px" width="100px" />
                        </div>
                        <h2 class="form-login-heading">Show students from department of:</h2>
                         <form action="search_student2.php" method="post" class="form-login">
                             <br>
                            <br>
                             <input type="text" name="dept" class="form-control" required><br>
                             
                            <input type="submit" name="submit" value="search" class="btn btn-success">
                             <br><br>
                            </form>
                        <strong>Search result:</strong>
                        <?php if(isset($_POST['submit'])) : ?>
                        <?php $username = $_SESSION['name'];
                        $dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
                        $query1= "SELECT * FROM student WHERE dept='$dept' order by id; ";
                        $result = $mysqli -> query($query1) or die($mysqli->error.__LINE__);
                        $count = $result->num_rows;
                        ?>
                        <?php if($count>0) : ?>
                            <?php while($q=$result->fetch_assoc()) : ?>
                                <li>ID:
                                <strong><?php echo ' '.$q['id'].'  ';?></strong>Name:
                                <strong><?php echo ' '.$q['fname'].'  ';?></strong>
                                <strong><?php echo ' '.$q['lname'].'  ';?></strong>Father:
                                <strong><?php echo ' '.$q['father'].'  ';?></strong>Mother:
                                <strong><?php echo ' '.$q['mother'].'  ';?></strong>Dept:
                                <strong><?php echo ' '.$q['dept'].'  ';?></strong>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                        
                        <br/>
        
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
      <footer>
        <div class="footer" >
      <p><li class="nav-item">
            <a class="nav-link" href="www.cuet.ac.bd">Chittagong University of Engineering and Technology - Official Website</a>
          </li></p>
    </div> 
      </footer>
    </body>
</html>