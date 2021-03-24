
<!DOCTYPE html>
<?php include 'library/Database.php'; 
session_start();
if(!$_SESSION['name'])
{

        header("location:login_index.php");
    
}
?>
<?php 
$query="SELECT * FROM teacher order by dept_id"; 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
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
        <div class="logo">
          <br/><br/><br/>
          <img src="images/cuet.png" height="120px" width="100px" />
      </div>

        <br/><br/><br/>
        <h2 class="form-signin-heading">Teachers involved in registration process: </h2>
        <?php if($result->num_rows>0) : ?>
          <?php while($q=$result->fetch_assoc()) : ?>
                <li class="shout"> 
                    <strong>
                    <span> 
                    <?php echo $q['fnam']; ?> </span>
                    <?php echo $q['lname']; ?>
                    </strong> <?php 
                    if($q['dept_id']==04)
                        echo 'CSE'; 
                    elseif($q['dept_id']==03)
                        echo 'EEE'; ?> 
        </li>
          <?php endwhile; ?>
    <?php endif; ?>
    </div>
      <footer>
        <div class="footer" >
      <p><li class="nav-item">
            <a class="nav-link" href="www.cuet.ac.bd">Chittagong University of Engineering and Technology - Official Website</a>
          </li></p>
    </div> 
      </footer>
    </body>
</html>