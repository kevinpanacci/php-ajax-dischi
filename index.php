<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Spotify</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
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
                        //include 'data.php';
                    ?>
                    <?php  //foreach ($songs as $key => $song) { ?>
                        <!-- <div class="card"> -->
                            <img src="<?php echo $song['immagine']; ?>" alt="">
                            <h2> <?php echo $song['titolo'];  ?> </h2>
                            <h3> <?php echo $song['autore'];  ?> </h3>
                            <p> <?php echo $song['anno']; ?> </p>
                        <!-- </div> -->
                    <?php // } ?>


            </div>
        </main>

        <script id="card-template" type="text/x-handlebars-template">
            <div class="card">
                <img src="{{immagine}}" alt="">
                <h2>{{titolo}}</h2>
                <h3>{{autore}}</h3>
                <p>{{anno}}</p>
            </div>
        </script>


        <script src="dist/js/main.js" charset="utf-8"></script>
    </body>
</html>
