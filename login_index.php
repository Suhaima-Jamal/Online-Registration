<?php include 'library/Database.php'; ?>
<!DOCTYPE html>
<?php include 'check_login.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Sign in page</title>
    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="style/custom.css" rel="stylesheet">
  </head>

  <body>
      <?php include 'header.php'; ?>
    <div class="container">
        <div class="logo">
          <br><br>
          <img src="images/cuet.png" height="120px" width="100px" >
      </div>

        <div class="col-md-10">
        <div class="block">
        
        <form class="form-signin" role="form" method="post" action="check_login.php">
            <h2 class="form-signin-heading">Login</h2><br>
            <input type="text" name="id" id="inputid" class="form-control" placeholder="User ID"  required autofocus value="<?php if(isset($_COOKIE["rem_user"])) {echo $_COOKIE['rem_user']; } ?>" >

            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required value="<?php if(isset($_COOKIE["rem_pass"])) { echo $_COOKIE['rem_pass']; }?>">
            <div class="checkbox">
            <label>
                <input name="remember" type="checkbox" value="1" checked> Remember Me
            </label>
            </div>
            <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Signin">
        </form>
        </div>
        </div>
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
