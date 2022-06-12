<?php
//$age = 18;

//if($age  < 18){

//}else{
    //echo "you are underage";
//}

//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="age" placeholder=" Enter age">
    <input type="submit" value="login">
    
    
</form>
</body>
</html>

<?php
$age = $_POST['age'];


if($age  < 18){
    echo "you are underage";
    
}

else{
    echo "you are an adult";
}





?>