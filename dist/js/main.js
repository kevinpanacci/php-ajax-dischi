$(document).ready(function(){

    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function(data) {
            var songs = data;
            var source = $('#card-template').html();
            var template = Handlebars.compile(source);
            for (var i = 0; i < songs.length; i++) {  //ciclo gli oggetti in data
                var song = songs[i]; //prendo un singolo oggetto
                var songobj = {
                    titolo: song.titolo,
                    autore: song.autore,
                    anno: song.anno,
                    immagine: song.immagine
                }
                var html = template(songobj);
                $('.cards-cta').append(html);
            }
        },
        error: function (error) {
            alert('BOOM');
        }
    });


});
