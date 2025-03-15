<div class="section works-section " id="works">
<div class="wrapper ">
    
        <div class="sec-title sec-right-title">
        <?php $page = get_page_by_path('works'); ?>
        <h2 class="sec-title-heading"><?php echo $page->post_title; ?></h2>
        <div class="sec-title-subHeading"><?php echo $page->post_content; ?></div>
        </div>
     
    
    <div class="splide works-slider" aria-labelledby="carousel-heading" id="carousel-heading">
    <div class="splide__track">
         <ul class="splide__list">
            <?php
            $args = [
                'posts_per_page' => -1,
                'category_name' => 'works',
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post(); ?>
            <li class="splide__slide"><a href="<?php the_permalink(); ?>" ><img src="<?php the_post_thumbnail_url(
    'full',
); ?>" alt="WEB画像"></a></li>
            <?php
                endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php
            endif;
            ?>
           
         </ul>
    </div>
    </div>
    
    <a href="<?php echo esc_url(home_url('/category/works/')); ?>"  class="btn">ViewMore</a>
</div>
 </div>

 