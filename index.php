<?php
    $paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. A reprehenderit itaque assumenda, impedit aliquam, optio atque sint aspernatur nulla doloribus, deleniti non quam cupiditate. Fugit laborum quisquam itaque unde ducimus.';
    $badword = $_GET["badword"];
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
    
    <p> <?php echo $paragraph; ?> </p>
    <h4> Numero di caratteri: <?php echo strlen($paragraph); ?> </h4>
    <h1> Parola vietata: <?php echo $badword; ?></h1>

    <!-- Paragrafo Modificato -->
    <p> <?php echo str_replace( $badword, '***', $paragraph);?> </p>
    <h4> Numero di caratteri: <?php echo strlen(str_replace( $badword, '***', $paragraph)); ?> </h4>


</body>
</html>