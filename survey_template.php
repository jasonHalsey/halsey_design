<?php
/*
Template Name: guided trips
*/
  get_header();
?>
<div id="wrapper">
    <?php 
        if ( have_posts() ) {
            wp_reset_query();
            setup_postdata($post); 
            echo esc_attr(htmlentities(the_content()));
        } else {
            echo "Es wurde noch kein Text definiert.";
        };
    ?>
</div>

<?php get_footer(); ?>