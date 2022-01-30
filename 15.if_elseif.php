<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if and if else statement</title>
</head>
<body>
    
   <?php
    //   if(5<2){
    //       echo "this condition is false";
    //   }
    //   echo "outer statement<br>";


    //   if(5>2){
    //     echo "this condition is true <br>";
    //  }
    //   echo "outer statement";
     
    //  if(5>6){
    //      echo " this is false condition";

    //  }else{
    //      echo "others statement print";
    //  }
    if(5>4){
        echo " inner one <br>";
        if(10>2){
            echo "nested inner to inner print <br>";
        }
        if(20>2){
            echo "nested inner to other inner print";
        }
    }
    if(9>4){
        echo "hello other statement";
    }
    

   ?>
</body>
</html>