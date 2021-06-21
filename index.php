<?php
    $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae consequatur at harum facere deserunt voluptatum.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
    <p> P: <?php echo $paragraph; ?> </p>
    <p> Numero di caratteri: <?php echo strlen($paragraph); ?> </p>

</body>
</html>