<?php
session_start();
if(isset($_SESSION['check']))
{
    unset($_SESSION['check']);
    if(!isset($_SESSION['check']))
    {
        header("Location:admin.php");
    }
}


?>