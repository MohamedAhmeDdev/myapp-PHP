<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="example13.php" method="post">
        <input type="text" name="firstname" placeholder="full name">
        <br><br>

        <select name="select" id="">
             <option value="Civil engineering">Civil engineering</option>
            <option value="Computer science">Computer science</option>
            <option value="Engineering technology">Engineering technology</option>
        </select>

        <br><br>
        <input type="text" name="score" placeholder="score">

        <br><br>
        <input type="submit">
    </form>

</body>
</html>
<?php
$firstname = $_POST['firstname'];
echo $firstname;
echo "<br>";
 $select = $_POST['select'];
 echo $select;
echo "<br>";
$score = $_POST['score'];

if($score < 60){
   echo "D" ."<br>" . "below average";
   
 }
 elseif($score >=60 && $score < 70){
     echo "C" ."<br>" . " A verage";
 }
 elseif($score >=70 && $score < 80){
     echo "B"  ."<br>" . "Average";
 }
 else{
     echo "A"  ."<br>" . "Excellent";
 }
?>

 <?php
//how to use if ,elseif and else
//$score = 90;

//if($score < 60){
 // echo "D";
//}
//elseif($score >=60 && $score < 70){
  //  echo "C";
//}
//elseif($score >=70 && $score < 80){
  //  echo "B";
//}
//else{
  //  echo "A";
//}
//?>