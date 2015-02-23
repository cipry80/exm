$( function() {

    var clickDescriere = false, clickUrl = false;

    $('#stanga td').click( function(){
        $(this).toggleClass('red-cell');
        if($(this).hasClass('name')){
            if(clickUrl !== false){
                clickUrl.toggleClass('red-cell');
            }
            clickUrl = $(this);
            if(clickDescriere !== false){
                json_data(clickUrl, clickDescriere);
                clickUrl = false;
                clickDescriere = false;
            }
        } else if($(this).hasClass('description')){
            if(clickDescriere !== false){
                clickDescriere.toggleClass('red-cell');
            }
            clickDescriere = $(this);
            if(clickDescriere !== false){
                json_data(clickUrl, clickDescriere);
                clickUrl = false;
                clickDescriere = false;
            }
        } else {
            return;
        }
    });
});


function json_data(url, descriere){
    $.ajax({
        dataType: 'json',
        url: 'http://www.ciprian.dev/json_data.php',
        data: {url: url.html(), descriere: descriere.html()},
        success: function(data){

            if(data.result === true){
                var tableDreapta = "<tr><td>"+url.html()+"</td><td>"+descriere.html()+"</td></tr>";
                $(tableDreapta).appendTo("#dreapta tbody");
                url.html('');
                descriere.html('');
            } else {
                alert('Mai incearca!');
            }

            url.toggleClass('red-cell');
            descriere.toggleClass('red-cell');

        }
    });
}