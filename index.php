<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Spotify</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="">
            </div>
        </header>
        <main>
            <div class="cards-cta">
                    <?php
                        include 'data.php';
                    ?>
                    <?php  foreach ($songs as $key => $song) { ?>
                        <div class="card">
                            <img src="<?php echo $song['immagine']; ?>" alt="">
                            <h2> <?php echo $song['titolo'];  ?> </h2>
                            <h3> <?php echo $song['autore'];  ?> </h3>
                            <p> <?php echo $song['anno']; ?> </p>
                        </div>
                    <?php } ?>

            </div>
        </main>
        <script src="dist/js/main.js" charset="utf-8"></script>
    </body>
</html>
