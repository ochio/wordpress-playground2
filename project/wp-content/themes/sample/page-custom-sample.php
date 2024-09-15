<?php 
/*
Template Name: My Custom Page
*/

get_header(); ?>

<div id="wrapper">
  aaaa
    <main>
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>