<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loop in php</title>
</head>
<body>
    <?php 
     $per=1;
    //  while($per<=5){
    //      echo " $per . welcome to india . <br>";
    //      $per++;
    //  }

    while(true){
        echo "$per : hello india <br>";
        $per++;
        if($per==30){
            break;
        }
    }
    
    
    
    ?>
</body>
</html>