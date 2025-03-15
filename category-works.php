<!-- Review: インデントの統一や不要なスペースなどを削除しました -->
<!-- Review: Prettierなどのコード整形ツールを使うとコードの一貫性が保てます！ -->
<?php get_header(); ?>
<div class="works-category-section">
    <div class="wrapper">
        <?php $page = get_page_by_path('works'); ?>
        <div class="sec-title sec-center">
            <h2 class="sec-title-heading"><?php echo $page->post_title; ?></h2>
            <div class="sec-title-subHeading"><?php echo $page->post_content; ?></div>
        </div>

        <div class="works-category-contents">
            <ul class="works-category">
                <?php
                $args = [
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'category_name' => 'works',
                ];
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <li class="works-category-list">
                            <a href="<?php the_permalink(); ?>" alt="サイト">
                                <p class="works-image-title">サイト名：<?php the_title(); ?></p>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="WEB画像">
                            </a>
                        </li>
                <?php
                    endwhile; ?>
            </ul>
            
            <div class="pagination-wrapper">
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi(['query' => $query]);
                } ?>
            </div>
            <?php wp_reset_postdata();
                endif;
                ?>
        </div>

        <a href="<?php echo esc_url(home_url()); ?>" class="btn">Top</a>
    </div>
</div>
<?php get_footer(); ?>
