<?php get_header(); ?>


<section>
     

   
    <?php if(have_posts()):  ?>
    <?php while(have_posts()): the_post(); ?>
    
    <a href="<?php the_permalink() ?>">
    <?php the_title(); ?>   

     <div>
        <?php 
        if( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail');
        } ?>
       </div> 

       <p><?php the_excerpt(); ?></p>
          <?php  the_category();?>  
          <div><?php the_author();?></div>
          <div><?php the_date(); ?></div>

  
    <?php endwhile ?>
    <?php endif ?>


</section>


<?php get_footer(); ?>