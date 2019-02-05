<?php get_header(); ?>
  
  
<div class="main-content">

    <section id="section-home">
        <div id="news" data-delay="300">
            <div class="news-content">
                <div class="news-title">
               

              
                
              <?php while($homePageNews->have_posts()) { ?>
             <div class="accordion-container"> 

               <?php $homePageNews->the_post(); ?>
             <li class="heading"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></li>
            <img class="accordion-toggle"src="<?php echo THEME_IMG_PATH;?>/cross.png">
        

                <div id="accordion-content">

                
               </div>
        

             <?php  }
               ?>

            
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
                    
