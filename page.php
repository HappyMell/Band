<?php
    get_header();

    while(have_posts()) {
        the_post(); ?>
<div class="main-content">

    <section id="section-home">
        <div id="news" class="news-post sr-animation sr-animation-frombottom animated active" data-delay="300">
            <div class="news-content">
                <div class="news-title">
            

              

            <li class="heading"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></li>

            <img class="accordion-toggle"src="<?php echo THEME_IMG_PATH;?>/cross.png">
             
            <div class="container">
              <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/album5.jpg" width="320" height="200" />
              </div>
              <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/album1.jpg" width="290" height="200" />
              </div>
               <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/clockalbum.jpeg" width="290" height="200" />
              </div>
               <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/sdgsdfg.jpg" width="290" height="200" />
              </div>
               <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/album3.jpeg" width="290" height="200" />
              </div>
               <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/album4.jpeg" width="290" height="200" />
              </div>
               <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/concert.jpeg" width="290" height="200" />
              </div>
                <div class="item">
                <img src="<?php echo THEME_IMG_PATH;?>/screenshot.png" width="290" height="200" />
              </div>
            </div>
                

             <?php  }
               ?>

            
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
                    
<?php get_footer()?>



