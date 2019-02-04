
<?php get_header(); ?>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
 $(document).ready(function () {
    $('.accordion-toggle').on('click', function(event){
    	event.preventDefault();
    	var accordion = $(this);
    	var accordionContent = accordion.next('#accordion-content');
    	accordion.toggleClass("open");
    	accordionContent.slideToggle("slow");
    	
    });
});
  </script>
<div class="main-content">

    <section id="section-home">
        <div id="news" class="news-post sr-animation sr-animation-frombottom animated active" data-delay="300">
            <div class="news-content">
                <div class="news-title">
                <hr>

               <?php 
               $homePageNews = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'news'
               ));
                
               while($homePageNews->have_posts()) { 
            ?>  <div class="accordion-container"> 

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
        
                <hr>

             <?php  }
               ?>

            
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
                    
<!-- -->