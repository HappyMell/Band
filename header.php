<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<aside id="nav" class="left-float">
    <h1 id="logo"><a href="<?php echo site_url()?>"> <img src="<?php echo THEME_IMG_PATH;?>/bandlogo.png"></a></h1>
              <nav id="main-menu" class="menu-main-menu-container">
                 <ul id="primary">
            <li class="menu-item animated"<?php if (get_post_type() == 'news') echo 'class="main-menu a:hover"' ?>><a href="<?php echo site_url() ?>">NEWS</a></li>
            <li class="menu-item animated"<?php if (get_post_type() == 'discography') ?>><a href="<?php echo site_url('discography') ?>">DISCOGRAPHY</a></li>
            <li class="menu-item animated"<?php if (get_post_type() == 'live') ?>><a href="<?php echo site_url('live'); ?>">LIVE</a></li>
            <li class="menu-item animated"<?php if (get_post_type() == 'store') ?>><a href="<?php echo site_url('store'); ?>">STORE</a></li>
            <li class="menu-item animated"<?php if (get_post_type() == 'follow') ?>><a href="<?php echo site_url('follow'); ?>">FOLLOW</a></li>

          </ul>   

</nav>
<a class="open-responsive-nav" href="">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</a>
</aside>


 
 
        
   
       