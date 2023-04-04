
<html lang="en">
<head>
<meta charset="UTF-8">   
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="x-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/ff412108f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="D:\xampp\htdocs\design new - Copy - Copy\css\style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
     <title>Realtime Chat App</title>
</head>
<body>
<form  method="POST" id="register-form" >
  
   <div class="wrapper">
    <section class="users">
        <header>
            <div class="content">
                <img src="my.jpeg" alt="">
                <div class="details">
                    <span>Digvijay</span>
                    <p>Active now</p>
</div>
</div>
<a href="logw.php" class="logout">Logout</a>
</header>
<div class="search">
    <span class="text">Select an user to start chat</span>
    <input type="text" placeholder="Enter name to search....">
    <button><i class="fas fa-search"></i></button>
</div>
<div class="users-list">
    <a href="ab.php" >
        <div class="content">
            <img src="my.jpeg" alt="">
            <div class="details">
                <span>sam</span>
                <p> This is text message</p>
</div>
</div>
<div class="status-dot"><i class="fas fa-circle"></i></div>
</a>
<a href="ac.php" >
        <div class="content">
            <img src="my.jpeg" alt="">
            <div class="details">
                <span>Raj</span>
                <p> This is text message</p>
</div>
</div>
<div class="status-dot"><i class="fas fa-circle"></i></div>
</a>
<a href="ad.php" >
        <div class="content">
            <img src="my.jpeg" alt="">
            <div class="details">
                <span>Suraje</span>
                <p> This is text message</p>
</div>
</div>
<div class="status-dot"><i class="fas fa-circle"></i></div>
</a>
</div>
</section>
</div>
   <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
  
 
  
</form>
</body>
</html>

























 