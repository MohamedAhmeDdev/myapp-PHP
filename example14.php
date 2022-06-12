<?php
//the swith condition
$functionality = "results";
switch ($functionality) {
    case 'profile':
        echo "your profile";
        break;
    case 'courses':
        echo "available courses";
         break;
     case 'results':
        echo "your results";
           break;
    case 'fees':
        echo "your fees";
          break;
        
        
         
    default:
        echo "invalid option";
        break;
}
?>