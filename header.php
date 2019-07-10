<!DOCTYPE html>
<html>

<head>
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Diplomata&display=swap" rel="stylesheet">


</head>

<body>
<?php wp_head(); ?>

   
    <header class="navbar fixed-top ">
    <div class="row">
    <div class="col-12">
    <?php 
        wp_nav_menu( array('theme_location' => 'header-menu',
      'depth'=> 0,// 1= no dropdowns, 2 = with dropdowns,
    'container'=> 'ul', 
  'menu_ class' => 'navbar-nav menu-nav'));      
       
      ?>   
    </div>    
                   
    

  </div>     

</header>

