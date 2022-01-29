<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo and print statement</title>
</head>
<body>
    <p>always use echo statement . basic defferent echo and print is when we ues , in two statement ehco show output  but print don't show output </p>
    <?php
      $first_name="Ashis ";
      $last_name=" Roy";
      $full_name="$first_name" . "$last_name";
     echo $full_name;
    //  print $full_name;
    //echo has no return value but print has 1 return value
    // multiple parameters in echo , single argumrnt in print
    //echo is faster then print

    //another type  of out put showing
    echo <<< MYDATA
    THIS IS ANOTHER OUTPUT SHOWING 
    BUT NOT USEFUL THIS.
MYDATA;    

    
    
    
    
    ?>
</body>
</html>