<?php
session_start();

require_once("dbconnectw.php");
if(isset($_SESSION['check']))
{
    header("location:homew1.php");
}
if(isset($_POST['btn-signup']))
{
    $myusername=$_POST['u_name'];
    $mypassword=$_POST['u_pass'];
    

   $query=$DBcon->query("SELECT u_id,u_name,u_pass FROM u_user WHERE u_name='$myusername'");
    $row=$query->fetch_array();
    $count =$query->num_rows;
    if(password_verify($mypassword, $row['u_pass']) && $count==1){
        $_SESSION['check'] =$row['l_id'];
        header("Location:homew3.php");
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
      <button type="submit" name="btn-signup">Submit &nbsp;</button><br><br>
</body>
</html></center>