<?php get_header();?>

 


<?php if( have_posts() ) : ?>
    <?php while( have_posts()) : the_post(); ?>
    
    <div class="card-deck">
  <div class="card">

 
    <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        
     
      <p class="card-text"><?php the_excerpt();?></p>

      <p class="card-text"><small class="text-muted"><?php the_content(); ?></small></p>
      <a href="http://localhost/web_page/home/contact-us/" class="btn btn-primary">Rent</a>
      <a href="http://localhost/web_page/home/contact-us/" class="btn btn-primary">Buy</a>
      <p class="card-text" ><small class="text-muted"><?php get_template_part('template-parts/content/custom'); ?>
    </small></p>
  
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>

