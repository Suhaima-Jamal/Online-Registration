<?php include 'library/Database.php'; 
session_start();
if(!$_SESSION['name'])
{

    header("location:login_index.php");
}
?>

<!DOCTYPE html>
        
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="style/custom.css" rel="stylesheet">
  </head>

  <body>
      <?php include 'header.php'; ?>
    <div class="container">
        <div class="col-md-10">
        <div class="block">
        <div class="logo">
          <br><br>
          <img src="images/cuet.png" height="120px" width="100px" >
      </div><br>
        
        <form class="form-login" role="form" method="post" action="search_student.php">
            <input type="text" name="sname" id="inputid" class="form-control" placeholder="search by name" ><br>

            <input type="text" name="sid" id="inputPassword" class="form-control" placeholder="Search by id" ><br>
            
            <input class="btn btn-success" name="submit" type="submit" value="search">
        </form>
        <br/><br/><strong>Search result:</strong><br/>
        <?php if(isset($_POST['submit'])) : ?>
            <?php $username = $_SESSION['name'];
            $name = mysqli_real_escape_string($mysqli, $_POST['sname']);
            $id = mysqli_real_escape_string($mysqli, $_POST['sid']);
            $query1= "SELECT * FROM student WHERE id='$id' or lname='$name' or fname='$name'; ";
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
            </div>
        </div>
    </div>
      <br/><br/><br/>
      <footer>
        <div class="footer" >
      <p><li class="nav-item">
            <a class="nav-link" href="www.cuet.ac.bd">Chittagong University of Engineering and Technology - Official Website</a>
          </li></p>
    </div> 
      </footer>
  </body>
</html>