<?php
/*
Plugin Name: Ingest REST API
Plugin URI:
Description:
Version: 0.1
*/


function wpatx_get_api() {

wp_enqueue_script( 'jquery' );
	?>

<button id="get-api-posts">Go!</button>
<script>
jQuery( function( $ ) {
	//inupt field Id .val()
  var srcinput = jQuery( '#inputfield').val();
  jQuery( '#get-api-posts' ).on( 'click', function ( e ) {
 // 	  alert(srcinput);

    e.preventDefault();
    $.ajax( {
    	type: 'GET',
    	dataType: "json",
    	data: " ",
		url: 'http://thelorax.wpengine.com/wp-json/wp/v2/posts',
      success: function(data) {

      jQuery('#result').html(data);
		for(var key in data) {

        $('#result').append('<a href="'+ data[key].link +'">'+ data[key].title.rendered +'</a><br />');

    }
      	console.log(data);
    	}
	} );
  } );
} );
</script>
<h1>foo</h1>
<div id="result"></div>

<?php
}
