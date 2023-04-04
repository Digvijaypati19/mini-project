<?php
require_once('dbconnect.php');
if(isset($_POST['btn-signup'])){
    $uname=$_POST['l_username'];
    $email=$_POST['l_email'];
    $upass=$_POST['l_password'];
    $hashed_password =password_hash($upass,PASSWORD_DEFAULT);

    $check_email=$DBcon->query("SELECT l_email FROM tbl_user WHERE l_email='$email'");
    $count=$check_email->num_rows;

    if($count==0)
    {
        $query="INSERT INTO tbl_user(l_username,l_email,l_password) VALUES('$uname','$email','$hashed_password')";

        if($DBcon->query($query)){
            echo"successfull registering !";
        }
        else{
            $msg="error while registe  ring !";
            
        }
    }else{
        $msg="sorry email already taken !";
    }
    $DBcon->close();
}?>
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
        <input type="email" placeholder="email address" class="form-control" name="l_email" required /><br><br>
        <input type="password" class="form-control" placeholder="password" id="myinput" name="l_password" required /><br>
        <input type="checkbox" onclick="myFunction()">show Passsword</br>
        <button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
    create Account <a href="loginh.php" class="btn btn-default" style="float:rigth;"> Login Here</a>
    </form></center>
    </div>
    </body>
    </html>