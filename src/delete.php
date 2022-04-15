<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
    $test = array(0 =>'a',1 => 'b',2 =>'c',4 =>'d');
   $test2 = array('Orange','Mango','Black');
    array_splice($test,1,2,$test2);
    print_r($test);
    
     
    ?>
</body>
</html>