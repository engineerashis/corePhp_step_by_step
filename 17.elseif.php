<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elseif statement</title>
</head>
<body>
    <?php
    $per=1;
    if($per>=80  && $per<=100){
        echo " 1st division";
    }elseif($per>=60 && $per<=80){
        echo "2nd division";
    }elseif($per>=45 && $per<=60){
        echo "3rd division";
    }elseif($per>=33 && $per<=45){
        echo "low division";
    }elseif($per<33){
         echo "your are fail";
    }else{
        echo "enter 1 to 100 : ";
    }
    
    
    
    
    
    
    ?>
</body>
</html>