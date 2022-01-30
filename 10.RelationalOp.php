<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relational operators in php</title>
</head>
<body>
    <?php
     //relational operator in php ==, ===, !=, <>, !==, >, <, <=, >=, <=>
     $x=100;
     $y="100";
     $z=$x==$y;
     echo $z;
     var_dump ($z);
    
     echo ("<br>");
     $x=100;
     $y="100";
     $z=$x===$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y="100";
     $z=$x!=$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y="100";
     $z=$x<>$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y="100";
     $z=$x!==$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y=40;
     $z=$x>$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y=40;
     $z=$x<$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y=40;
     $z=$x>=$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y=40;
     $z=$x<=$y;
     echo $z;
     var_dump ($z);

     echo ("<br>");
     $x=100;
     $y=40;
     $z=$x<=>$y;
     echo $z;
     var_dump ($z);
    
    
    
    
    
    
    ?>
</body>
</html>