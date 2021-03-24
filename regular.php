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
        $level = mysqli_real_escape_string($mysqli, $_POST['level']);
		$term = mysqli_real_escape_string($mysqli, $_POST['term']);
		$one = mysqli_real_escape_string($mysqli, $_POST['one']);
		$two = mysqli_real_escape_string($mysqli, $_POST['two']);
		$three = mysqli_real_escape_string($mysqli, $_POST['three']);
		$four = mysqli_real_escape_string($mysqli, $_POST['four']);
		$five = mysqli_real_escape_string($mysqli, $_POST['five']);
		$six = mysqli_real_escape_string($mysqli, $_POST['six']);
        $seven = mysqli_real_escape_string($mysqli, $_POST['seven']);
        $eight = mysqli_real_escape_string($mysqli, $_POST['eight']);
        $nine = mysqli_real_escape_string($mysqli, $_POST['nine']);
        $ten = mysqli_real_escape_string($mysqli, $_POST['ten']);
		echo $username;
        $rcpt = mysqli_real_escape_string($mysqli, $_POST['rcpt']);
		echo $username;
        echo "hello there";
		$query1= "UPDATE current_course SET level='$level',term='$term', C_ID_1='$one', C_ID_2='$two', C_ID_3='$three', C_ID_4='$four', C_ID_5='$five', C_ID_6='$six',C_ID_7='$seven',C_ID_8='$eight',C_ID_9='$nine',C_ID_9='$nine',C_ID_10='$ten', rcpt='$rcpt' WHERE S_ID='$username';";
		
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
                        <h2 class="form-login-heading">Register for regular courses</h2>
                         <form action="regular.php" method="post" class="form-login">
                             <br>
                            <br>
                             Reg for:
                             <br>
                            Level: <br>
                             <input type="text" name="level" class="form-control" required><br>
                             Term:<br>
                             <input type="text" name="term" class="form-control" required><br>
                            Course 1:
                            <input type="text" name="one" required class="form-control"><br>
                            Course 2:
                            <input type="text" name="two" class="form-control" required><br>
                            Course 3:
                            <input type="text" name="three" class="form-control" required><br>
                            Course 4:
                            <input type="text" name="four" class="form-control" required><br><br>
                            Course 5:<input type="text" name="five" class="form-control" required><br><br>
                            Course 6: <input type="text" name="six" class="form-control" required><br>
                            Course 7: <input type="text" name="seven" class="form-control" required><br>
                            Course 8: <input type="text" name="eight" class="form-control" required><br>
                             <br>
                            Course 9: <input type="text" name="nine" class="form-control" required><br>
                             <br>
                            Course 10: <input type="text" name="ten" class="form-control" required>
                             Rcpt no (Sonali Bank CUET branch): <input type="text" name="rcpt" class="form-control" required>
                            <br><br><input type="submit" name="submit" value="submit" class="btn btn-success">
                             <br><br>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->


    </body>
</html>