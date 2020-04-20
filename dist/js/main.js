$(document).ready(function(){

    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function(data) {
            // var ciao = JSON.parse(data); //serve per ordinare il data
            console.log(data);
            var faqs = data;
            for (var i = 0; i < faqs.length; i++) {  //ciclo gli oggetti in data
                var faq = faqs[i]; //prendo un singolo oggetto
                $('main .container').append('<h2>' + faq.question + '</h2>' + '<p>' + faq.answer + '</p>'); //aggiungo le domande all'html


            }
        },
        error: function (error) {
            alert('BOOM');
        }
    });


});
