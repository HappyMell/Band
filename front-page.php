
<?php get_header(); ?>
 
<div class="main-content">

    <section id="section-home">
        <div id="news" class="news-post sr-animation sr-animation-frombottom animated active" data-delay="300">
            <div class="news-content">
                <div class="news-title">
            

               <?php 
               $homePageNews = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'news'
               ));

               while($homePageNews->have_posts()) { 
            ?>  
             <div class="accordion-container"> 

               <?php   $homePageNews->the_post(); ?>
            <li class="heading"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></li>

            <img class="accordion-toggle"src="<?php echo THEME_IMG_PATH;?>/cross.png">
             <div id="accordion-content">


                 <?php 
                $image = get_field('news_photo');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                        }

         the_content(); ?> 
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