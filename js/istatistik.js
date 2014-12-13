/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
  // Handler for .ready() called.

    $("#istatistikForm").submit(function(event) {
        /* stop form from submitting normally */
        event.preventDefault(); 
        
        /* get some values from elements on the page: */
        var $form = $( this ),
            term = $form.find( '#secenekler' ).val(),
            url = $form.attr( 'action' );

        /* Send the data using post and put the results in a div */
        $.post( url, { op: term },
          function( data ) {
              var content = $( data ).find( '#content' );
              $( "#istatistikSonuc" ).empty().append( data);
          }
        );
    });

});