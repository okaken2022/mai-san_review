<div class="about-section section" id="about">
 <div class="wrapper">
 
        <div class="sec-title sec-right-title">
        <?php $page =get_page_by_path('about'); ?>
        <h2 class="sec-title-heading"><?php echo $page->post_title;?></h2>
        <div class="sec-title-subHeading"><?php echo $page->post_content;?></div>
        </div>

        <div class="about">
          <?php
            $args =array(
                'posts_per_page'=>-1,
                'category_name'=>'about',
            );
            $query=new WP_Query($args);
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post();
                ?>
        <div class="about-contents">
        <div class="about-image"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="プロフィール画像"></div>
        <div class="about-text">
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?></div>
        </div>
            
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

    </div>
    </div>
    </div>

