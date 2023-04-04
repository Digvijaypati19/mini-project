<?php
session_start();

require_once("dbconnect.php");
if(isset($_SESSION['check']))
{
    header("location:homeh.php");
}
if(isset($_POST['btn-signup']))
{
    $myusername=$_POST['l_username'];
    $mypassword=$_POST['l_password'];
    

   $query=$DBcon->query("SELECT l_id,l_username,l_password FROM tbl_user WHERE l_username='$myusername'");
    $row=$query->fetch_array();
    $count =$query->num_rows;
    if(password_verify($mypassword, $row['l_password']) && $count==1){
        $_SESSION['check'] =$row['l_id'];
        header("Location:homeh.php");
    }else{
        echo"Invailde Username or passowrd";
    }
$DBcon->close();

}


?>
<!DOCTYPE html PUBLIC>
<html>
    <head><center>
        <script>
            function myFunction()
            {
                var x =document.getElementById("myinput");
                if(x.type === "password"){
                    x.type ="text";
                }else{
                    x.type ="password";
                }
            }
            </script>
</head>
<body>
    <form method="POST" id="register-form">
        <h2>sign up</h2><hr/>
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
        <input type="text" placeholder="username" name="l_username" required /><br><br>
        
        <input type="password" class="form-control" placeholder="password" id="myinput" name="l_password" required /><br>
        <input type="checkbox" onclick="myFunction()">show Passsword</br>
        <button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
    
    </form></center>
    </div>
    </body>
    </html>