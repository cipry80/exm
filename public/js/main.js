$( function() {
    $.getJSON('http://www.ciprian.dev/arrayEchoData.php', function(data){
        $.each(data, function(key, val){
            $('#stanga').append('<tr class="name">' + '<td>'+ val.nume + '</td>' + '<td class="description">'+ val.url + '</td>');
        });
        $('td').click( function(){
	$(this).toggleClass('red-cell');
            var clickUrl = $(this).hasClass( 'name' );
            var clickDescriere = $(this).hasClass( 'description' );
            if(clickUrl === true){
                if(clicDescriere === true){
                    
                            
                            
                }
                else{
                    //wrong select
                }
            }
            else{
                    //wrong select
                }
           
        });
    });
  
});
  