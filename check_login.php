<?php include 'library/Database.php'; ?>
<?php 
    session_start(); 
?>
<?php
    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST, "id");
        $password = filter_input(INPUT_POST, "password");
        $remember = $_POST["remember"];
        
        $sql = "SELECT * FROM login WHERE userid='$username' AND pass='$password';";
        $result = $mysqli -> query($sql);
        $count = $result -> num_rows;
        $row=mysqli_fetch_assoc($result);
        $type = $row["type"];
        //echo(type);
        if($count == 1){
            $_SESSION['name']=$username;
            $_SESSION['type']=$type;
            if($remember){
                setcookie("rem_user",$username, time()+3600);
                setcookie("rem_pass",$password,time()+3600);
            } else {
                setcookie("rem_user","");
                setcookie("rem_pass", "");
            }
            header("location:index.php");
        } else {
            echo "<h1 style='color:red'> Wrong Password!</h1><br>";
            echo "<a href='index.php'>Try again?</a>";
        }
    }
?>