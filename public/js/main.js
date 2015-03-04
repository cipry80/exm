$( function() {
    $.getJSON('http://www.ciprian.dev/arrayEchoData.php', function(data){
        $.each(data, function(key, val){
            $('#stanga').append('<tr>' + '<td>'+ val.nume + '</td>' + '<td>'+ val.url + '</td>');
        });
        $('td').click( function(){
	$(this).toggleClass('red-cell');
            var clickUrl = $(this).hasClass( 'name' );
            console.log(clickUrl);
            var clickDescriere = $(this).hasClass( 'description' );
            console.log(clickDescriere);
           
        });
    });
  
});
  