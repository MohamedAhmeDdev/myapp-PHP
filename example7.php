<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
<form action="example7.php" method="post"> 
    <input type="text" name="username" placeholder=" Enter username">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" value="login" name="login">
</form>
</body>
</html>

<?php
if(isset($_POST['login'])){
    $usr = $_POST['username'];
    $pwd = $_POST['password'];

    if($usr =='mary' && $pwd == '456'){
        header('location: dashboard.php');
    }else{
        echo "invalid credentials!";
    }
}
?> 