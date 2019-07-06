

  

<ul class="list-group list-gxlroup-horizontal-md">
  <li class="list-group-item"><?php if (get_field('year')): ?>
                        <h6><?php the_field('year'); ?></h6>
                        <?php endif; ?></li>
  <li class="list-group-item"> <?php if (get_field('model')): ?>
                        <h6><?php the_field('model'); ?></h6>
                        <?php endif; ?>
</li>
  <li class="list-group-item"> <?php if (get_field('state')): ?>
                        <h6><?php the_field('state'); ?></h6>
                        <?php endif; ?>
</li>
<li class="list-group-item"><?php if (get_field('price')): ?>
                        <h6><?php the_field('price'); ?></h6>
                        <?php endif; ?>
</li>
                        
</ul>
