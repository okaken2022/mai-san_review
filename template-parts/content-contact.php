<div class="section contact-section" id="contact">
<div class="wrapper">
            <?php
            $args = [
                'posts_per_page' => -1,
                'category_name' => 'contact',
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post(); ?>
           <div class="contact-contents">
             <div class="contact-text"><?php the_content(); ?></div>
             <a href="<?php echo esc_url(
                 home_url('/category/contact/'),
             ); ?>" class="btn">MailForm</a>
            </div>
            <?php
                endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php
            endif;
            ?>
  
            <div class="sec-title sec-left-title">
            <?php $page = get_page_by_path('contact'); ?>
            <h2 class="sec-title-heading"><?php echo $page->post_title; ?></h2>
            <div class="sec-title-subHeading"><?php echo $page->post_content; ?></div>
            </div> 

</div>
 </div>

