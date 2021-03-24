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
        $pass1 = mysqli_real_escape_string($mysqli, $_POST['pass1']);
        $pass2 = mysqli_real_escape_string($mysqli, $_POST['pass2']);
        if($pass1==$pass2)
        {
            $query1= "UPDATE login SET pass='$pass1' WHERE userid='$username';";
        }
     else
     {
         echo 'Passwords do not match. Try again.';
     }
		
     if($mysqli->query($query1)===TRUE)
        {
            echo "New record created successfully";
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
                        <h4 class="form-login-heading">New Password: </h4>
                         <form action="change_pass.php" method="post" class="form-login">
                             <br>
                             <input type="password" name="pass1" class="form-control" required><br>
                             <h4 class="form-login-heading">Confirm new Password: </h4>
                             <input type="password" name="pass2" class="form-control" required><br>
                             
                            <input type="submit" name="submit" value="Change" class="btn btn-success">
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->


    </body>
</html>