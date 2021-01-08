<?php

require_once __DIR__ . '/../db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

        <?php
            foreach($db['response'] as $disco => $value){
        ?>

        <div class="card">
                <img src="<?php echo $value['poster'] ?>" alt="poster">
                <h4 class="uppercase"><?php echo $value['title'] ?></h4>
                <p><?php echo $value['author'] ?></p>
                <p>Genere: <?php echo $value['genre'] ?></p>
                <p>Anno: <?php echo $value['year'] ?></p>
        </div>

        <?php
            }
        ?>

    </div>

</body>
</html>