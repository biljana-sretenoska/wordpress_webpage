

<div class="card-group">
<div class="card-deck">

<?php if( have_posts() ) : ?>
    <?php while( have_posts()) : the_post(); ?>

<div class="card mb-3" style="min-width: 400px;">
  <div class="row gutters">
    <div class="col-md-12">
    <img src="<?php echo the_post_thumbnail_url('small');?>" class="card-img-top" alt="...">  
    
    </div>
    <div class="col-md-12">
      <div class="card-body">
        <h5 class="card-title text-secondary"><?php the_title();?></h5>
        <p class="card-text"><?php the_excerpt();?></p>
    
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more...</a>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>
</div>