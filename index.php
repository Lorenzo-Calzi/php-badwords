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
    <!-- Link CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <!-- Title -->
    <title>Bad Words</title>
</head>
<body>
    
    <main>
        <h1>PHP BAD-WORDS</h1>
        <p> <?php echo $paragraph; ?> </p>
        <h4> Numero di caratteri: <?php echo strlen($paragraph); ?> </h4>
        <h3> Parola vietata: <span><?php echo $badword; ?></span> </h3>

        <!-- Paragrafo Modificato -->
        <p> <?php echo str_replace( $badword, '***', $paragraph);?> </p>
        <h4> Numero di caratteri: <?php echo strlen(str_replace( $badword, '***', $paragraph)); ?> </h4>

    </main>

</body>
</html>