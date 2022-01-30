<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical operators</title>
</head>
<body>
    <?php
      // logical operators in php && , || , ! , AND , OR, NOT, xor
      $a=10;
      $b=20;
      $c=30;
      if(($a==10) && ($b>18)){
          echo "both condition are true then print the statement<br>";
      };
      if(($a==10) || ($b<18)){
          echo " one condition is true and one false but print statement <br>";
      };

      if($a!=11){
          echo "statement false but result  showing <br>";
      }
      if((5>21) xor (9<53)){
          echo " one true and one false then output true";
      }
   
    ?>
</body>
</html>