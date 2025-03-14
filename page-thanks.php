<?php get_header(); ?>

<div class="thanks-section">
    <div class="wrapper">

      <div class="sec-title sec-center">
        <h2 class="sec-title-heading"><?php the_title(); ?></h2>
        <div class="sec-title-subHeading"><?php the_content(); ?></div>
      </div>

     <div class="thanks-content">
    <?php
            $args =array(
                'posts_per_page'=>-1,
                'category_name'=>'thanks',
            );

            $query=new WP_Query($args);
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post();
                ?>
           <div class="thanks-text"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    </div>
    <a href="<?php echo esc_url(home_url()); ?>" class="btn">Top</a>
    </div>
</div>
            
<?php get_footer(); ?>