

<?php get_header();?>


<div class="container ">
  

  <?php if( have_posts() ) : ?>
    <?php while( have_posts()) : the_post(); ?> 
        <div>
                <?php if(has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?>
            </div> 
        <p>
            <?php the_content(); ?>
        </p>
        
    <?php endwhile;?>
<?php endif;?>

</div>
<?php get_footer(); ?>