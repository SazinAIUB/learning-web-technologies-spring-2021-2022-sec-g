<?php
      $num1=20;
      $num2=35;
      $num3=22;
      if($num1>$num2 && $num1>$num3){
        echo "The Largest Number Is: ".$num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "The Largest Number Is: ".$num2;
        }
        else
          echo "The Largest Number Is: ".$num3;
      }

?>