$( function() {
  $('td').click( function(){
	$(this).toggleClass('red-cell');
           /*var click = $(this).closest('td').html();*/
            var clickUrl = $(this).hasClass( 'name' );
                console.log(clickUrl);
                var clickDescriere = $(this).hasClass( 'description' ).toString();
                console.log(clickDescriere);
            if( clickUrl === true){ 
                 if (clickDescriere === true){  
                     $('#dreapta').append('<tr><td>clickUrl</td><td>clickDescriere</td></tr>');
                };
            };  
  });
});
