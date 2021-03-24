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
    <title>Home </title>
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
        <br/><br/>
        <h2 class="form-signin-heading">Welcome to CUET's online course registration process</h2>
        <div>
          <h4><a class="nav-link" href="change_pass.php">Change password</a></h4>
      </div>
    </div> 
      
      <br/><br/><br/>
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
