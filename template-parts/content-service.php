<div class="section service-section " id="service">
<div class="wrapper">
    
        <div class="sec-title sec-left-title">
        <?php $page =get_page_by_path('service'); ?>
        <h2 class="sec-title-heading"><?php echo $page->post_title;?></h2>
        <div class="sec-title-subHeading"><?php echo $page->post_content;?></div>
        </div>

    <div class="scroll-line"><span>scroll</span></div>

    <div class="service">
        <ul class="service-contents">
            <?php
            $args =array(
                'posts_per_page'=>-1,
                'category_name'=>'service',
            );

            $query=new WP_Query($args);
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post();
                ?>
            <li class="service-contents-list">
                <h3 class="service-contents-title"><?php the_title(); ?></h3>
                <div class="service-contents-card">
                    <div class="service-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="サービス画像">
                       </div>
                    <div class="service-text"><?php the_content(); ?></div>
                </div>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
       
    </div>
     
            </div>
 </div>
