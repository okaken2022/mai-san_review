<?php get_header(); ?>

<div class="contact-section-form contact-confirm">
  <div class="wrapper">
        <div class="sec-title sec-center">
        <?php $page = get_page_by_path('contact'); ?>
        <h2 class="sec-title-heading"><?php echo $page->post_title; ?></h2>
        <div class="sec-title-subHeading"><?php echo $page->post_content; ?> </div>
        </div>
  <div class="contact-form">
        <?php
        $args = [
            'posts_per_page' => 1,
            'category_name' => 'confirm',
        ];
        $query = new WP_Query($args);
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post(); ?>
              <?php the_content(); ?>
             
            <?php
            endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php
        endif;
        ?>
    </div>
            <div class="contact-form-check">
             <?php echo do_shortcode(
                 '[contact-form-7 id="9c11908" title="お問い合わせ_確認画面"]',
             ); ?>
            </div>
           
           
        </div>

<?php get_footer(); ?>
