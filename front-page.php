<?php get_header();?>


<div class="container-fluid">


  
  <?php if( have_posts() ) : ?>
    <?php while( have_posts()) : the_post(); ?> 
  
        <h1>
            <?php the_content(); ?>      
         </h1>
               
     
      
    <?php endwhile;?>
<?php endif;?>

</div>
<?php get_footer(); ?>

