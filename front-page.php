<?php get_header(); ?>
<body>
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
                $homePageNews->the_post(); ?>
                <div class="panels">
                <li><a href="<?php the_permalink();?>"> <?php the_title();?></a><img class="cross" src="<?php echo THEME_IMG_PATH;?>/cross.png"></li>
                </div>
                <div class="reverse-panel">
                 <?php 
                $image = get_field('news_photo');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                        }
                the_content();
                    ?>
                <hr>

             <?php  }
               ?>
                </div>
              


                    <a class="bracket-button active" href="#">
                    <span class="tlt"></span>
                    <span class="outer">
                        <span class="inner"></span>
                    </span>
                    </a>
                </div>
            </div>
            </div>
    </section>

</div>
                    </body>
         
