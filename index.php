<?php get_header(); ?>


<section>
     

   
    <?php if(have_posts()):  ?>
    <?php while(have_posts()): the_post(); ?>
    
    
    <?php the_title(); ?>   

     <div>
        <?php 
        if( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail');
        } ?>
       </div> 

       <p><?php the_excerpt(); ?></p>
          <?php  the_category();?>  
         

  
    <?php endwhile ?>
    <?php endif ?>


</section>


<?php get_footer(); ?>