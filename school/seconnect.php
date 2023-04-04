<?php
if($_POST['submit']){
    $q1=$_POST['subject'];
    $q2=$_POST['subject1'];
    $q3=$_POST['subject2'];
    $q4=$_POST['subject4'];
    $q5=$_POST['subject5'];
    $q6=$_POST['subject6'];
    $q7=$_POST['subject7'];
    $q8=$_POST['subject8'];
    $q9=$_POST['subject9'];
    $q10=$_POST['subject10'];

    if($q1==" || $q2==" ||$q3==" ||$q4==" ||$q5==" ||$q6==" ||$q7==" ||$q8==" ||$q9==" ||$q10=="){
        echo'<h2>Please answer all question.</h2>';
    }
    else{
        $a=0;
        if($q1 == 1){
            $a=$a+2;
        }
        if($q2 == 1){
            $a=$a+2;
        }
        if($q3 ==2){
            $a=$a+2;
        }
        if($q4 == 3){
            $a=$a+2;
        }
        if($q5 ==2){
            $a=$a+2;
        }
        if($q6 ==2){
            $a=$a+2;
        }
        if($q7 == 2){
            $a=$a+2;
        }
        if($q8 ==3){
            $a=$a+2;
        }
        if($q9 ==1){
            $a=$a+2;
        }
        if($q10 ==1){
            $a=$a+2;
        }
        if($a<=20){
            echo'<h2>Exam Succecfully Submited</h2>';
            echo'<h3>Your Marks is</h3>';
            print$a;

        }
        }
    }
    
    ?>
    <html>
         <body>
         <br><button><a href="checks2.php">Home Page</a></button>
     </body>
     </html>