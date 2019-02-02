<?php
    get_header();

    while(have_posts()) {
        the_post(); 
        ?>
        
<?php   }
?>
<div class="main-content">
<div class="main-inner">
<section id="section-home">
<div class="row">
<div class="news-content">

<hr>
<div class="news-title"> <?php the_title(); ?><?php the_content();?></div>
</div>
</div>
</section>
</div>
</div>