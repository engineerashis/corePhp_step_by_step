<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch operators</title>
</head>
<body>
    <?php 
    
     $date=2;
    switch($date){
        case 1:
            echo "html ";
            break;
        case 2:
            echo "css ";
            break;
        case 3:
            echo "js ";
            break;
        case 4:
            echo "php ";
            break;
        default:
        echo "No data found";
    }
    
    
    ?>
</body>
</html>