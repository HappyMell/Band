<?php get_header(); ?>
<div class="main-content">

    <section id="section-home">
        <div id="news" class="news-post sr-animation sr-animation-frombottom animated active" data-delay="300">
            <div class="news-content">
                <div class="news-title">
                <hr>
        
            <?php the_title() ?>
            <br>
            <br>
              <?php 

                $image = get_field('news_photo');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)

                if( $image ) {

                    echo wp_get_attachment_image( $image, $size );

                }

                ?>
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