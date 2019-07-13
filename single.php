<?php get_header();?>

 
<div class="container ">

<?php if( have_posts() ) : ?>
    <?php while( have_posts()) : the_post(); ?>

       <h3><?php the_title();?></h3>
        
     
      <p ><?php the_excerpt();?></p>
    

      <p ><?php the_content(); ?></p>
     



      <ul class="list-group list-group-flush">
      <li class="list-group-item"><?php get_template_part('template-parts/content/custom'); ?>    
      </ul>

    

  
    </div>
 
<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>

