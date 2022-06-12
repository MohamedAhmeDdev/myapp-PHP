<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my calculator 2</title>
</head>
<body>
   
<form action="example5.php" method="post">
    <input type="number" placeholder="Enter your first number" name="x">
    <input type="number" placeholder="Enter your second number" name="y">
    <input type="submit" value="calculate" name="calculate">
</form>
</body>
</html>
<?php
echo $_POST['x'] * $_POST['y'];
?>