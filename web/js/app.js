$.get( "@App/blog/show.html.twig", function( data ) {
  $( ".result" ).html( data );
  alert( "Load was performed." );
});