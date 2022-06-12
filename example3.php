<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my calculator</title>
</head>
<body>
    <form action="example3.php"  method="post">
        <input type="number" placeholder= "enter first number" name="num1"> <br><br>
  
        <input type="number" placeholder = "enter second number" name="num2"><br><br>
        <input type="submit" value ="calculate" name="calculate">
   
    </form>
    
</body>
</html>
<?php
echo $_POST['num1']+ $_POST['num2'];

?>