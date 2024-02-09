<?php
    session_start();
    if(isset($_SESSION["counter"])){
        if($_SESSION["counter"]==1)
        {
            header ("location: content.php");
            exit();
        }
    }   
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="assets/js/index.js"></script>
</head>
<body>
    <form id="logingin" method="post" action="#"><br>
        <label for="user">Enter username: </label>
        <input type="text" id="user" name="user"><br><br>

        <label for="password">Enter password: </label>
        <input type="text" id="password" name="password"><br><br>

        <input type="submit" value="Log in" class="login"><br><br>
        <input type="submit" value="Create Admin" class="create_admin"> 
</form>
</body>
</hmtl>