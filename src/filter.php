
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter</title>
</head>
<body>
    <?php
 
       $firstarray = array ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', "c4" => 'Black');
       $secondarray = array ('c2', 'c4');
         print_r(array_diff_key( $firstarray,array_flip ($secondarray)));
    ?>

</body>
</html>