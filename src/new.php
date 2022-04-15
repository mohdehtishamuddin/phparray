<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new item</title>
</head>
<body>
    <?php
    $original = array(1,2,3,4,5);
     
        echo '$original:';
        foreach ($original as $v1) {
            # code...
        
        echo "$v1<br>";
        }
        echo "\n";
        $inserted_value = "2";
       $position = 1;

       array_splice($original,$position, 0,$inserted_value);
       echo " inserting value 2 in the array :";
       foreach ($original as $v1) {
        # code...
    
    echo "$v1";
       }
    ?>
</body>
</html>