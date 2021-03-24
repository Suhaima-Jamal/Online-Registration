<?php include 'library/Database.php'; ?>
<?php
session_start();
if(!$_SESSION['name'])
{

        header("location:login_index.php");
    
}

 if(isset($_POST['submit']))
	{
        $username = $_SESSION['name'];
        $batch = mysqli_real_escape_string($mysqli, $_POST['batch']);
        $batch2=$batch.'%';
		
        echo "Hello there ";
		echo $username;
		$query2= "DELETE FROM student WHERE id LIKE '$batch2';";
		
     if($mysqli->query($query2)===TRUE)
        {
            echo ". Record deleted successfully";
        }
     else
     {
         echo "Error: ".$mysqli->error;
     }
        
    }
 ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Sign in page</title>
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
                        <h2 class="form-login-heading">Delete students of batch:</h2>
                         <form action="deletion.php" method="post" class="form-login">
                             <br>
                            <br>
                             <input type="text" name="batch" class="form-control" required><br>
                             
                            <br><br><input type="submit" name="submit" value="submit" class="btn btn-success">
                             <br><br>
                            </form>
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