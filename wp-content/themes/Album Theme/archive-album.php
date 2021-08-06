<?php
get_header();

?>
<script>
    jQuery(document).ready(function($) {
        $.get( "http://localhost:8888/Album/wp-json/get/albums/", function( data ) {
            $( data ).each(function( index ) {
                $('.archive-album').append('<a href="'+data[index].permalink+'"><img src="'+data[index].thumbnail+'" alt="'+data[index].title+'"/><h2>'+data[index].title+'</h2></a>')
            });
        });
    })
</script>
  <div class="archive-album">  
</div>
<?php
get_footer();
?>