<?php
session_start();
require_once('dbconnecta.php');
if(isset($_SESSION['check'])){
    
    header("location:homec.php");
}
if(isset($_POST['btn-signup']))
{
    $uname=$_POST['u_name'];
    $upass=$_POST['u_pass'];
    $query=$DBcon->query("SELECT u_id,u_name,u_pass FROM u_user WHERE u_name='$uname'");
    $row=$query->fetch_array();
    $count =$query->num_rows;
    if(password_verify($upass, $row['u_pass']) && $count==1){
        $_SESSION['check'] =$row['u_name'];
        header("Location:homec.php");
    }else{
        echo"Invailde Username or passowrd";
    }
$DBcon->close();
}
?>







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
<body background="dpw.jpg">
    <img src="dlogo.jpg" width="15%" heigth="20%">
    <form method="POST" id="register-form"><br>
    Enter name    <input type="text" name="u_name" id="u_name" placeholder="Name" required/><br><br>
    Password    <input type="password" name="u_pass" id="myinput" placeholder="Password" required/><br><br>
        <input type="checkbox" onclick="myFunction()">show Passsword</br>
      <div class="field button">
        <button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
        </div>
        </form>
</body>
</html></center>