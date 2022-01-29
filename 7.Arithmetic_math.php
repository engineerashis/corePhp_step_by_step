<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmatic operators</title>
</head>
<body>
    <?php
    // arithematic operators are +, - , * , / , **, %, ++, --
    $num1=30;
    $num2=10;
    $num3=$num1+$num2;
    echo "$num3.<br>";

    $num1=30;
    $num2=10;
    $num3=$num1-$num2;
    echo "$num3. <br>";

    $num1=30;
    $num2=10;
    $num3=$num1*$num2;
    echo "$num3. <br>";

    $num1=30;
    $num2=10;
    $num3=$num1/$num2;
    echo "$num3. <br>";

    $num1=3;
    $num2=2;
    $num3=$num1**$num2;
    echo "$num3. <br>";
    
    $num1=30;
    $num2=10;
    $num3=$num1 % $num2;
    echo "$num3. <br>";

    $a=30;
    $a++;
    echo "$a . <br>";
     
    $b=39;
    $b--;
    echo $b;

    ?>
</body>
</html>