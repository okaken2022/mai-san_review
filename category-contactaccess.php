<?php get_header(); ?>

<div class="section contact-section-form contact-access">
<div class="wrapper">
        <div class="sec-title sec-center">
        <?php $page =get_page_by_path('contact'); ?>
        <h2 class="sec-title-heading"><?php echo $page->post_title;?></h2>
        <h3 class="sec-title-subHeading"><?php echo $page->post_content;?> </h3>
        </div>
    <div class="contact-form">
        <?php
            $args =array(
                'posts_per_page'=>1,
                'category_name'=>'contactaccess',
            );
            $query=new WP_Query($args);
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post();
                ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    
        <?php
            $args =array(
           
                'posts_per_page'=>1,
                'category_name'=>'mailform',
            );

            $query=new WP_Query($args);
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post();
                ?>
    </div>
    
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    </div>
            <a href="<?php echo esc_url(home_url('/thanks/')); ?>" class="btn btn-send">Send</a>
           
</div>
<?php get_footer(); ?>
