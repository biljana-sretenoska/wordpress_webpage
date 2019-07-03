<?php get_header();?>


<div class="container pt-5 pb-5">
  
  
  <?php if( have_posts() ) : ?>
    <?php while( have_posts()) : the_post(); ?> 
        
        <p>
            <?php the_content(); ?>
        </p>
    <?php endwhile;?>
<?php endif;?>

</div>
<?php get_footer(); ?>