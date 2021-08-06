<?php get_header() ?>
<div class="single-album">
<?php
    if (have_rows('album_images')):
        while (have_rows('album_images')) : the_row();
            $image = get_sub_field('image');
            ?>
            <a href="<?= $image ['url'] ?>" target="_blank"><img src="<?= $image ['url'] ?>" alt="album-image"/></a>
        <?php
        endwhile;
        else :
    endif;
?>
</div>

<?php get_footer() ?>