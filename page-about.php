<?php get_header(); ?>

    <div class="about-section section" id="about">
        <div class="wrapper">
            <div class="sec-title sec-left">
                <?php
                $page = get_page_by_path('about');
                if ($page) {
                    echo '<h2 class="sec-title-heading">' . esc_html($page->post_title) . '</h2>';
                    echo '<div class="sec-title-subHeading">' . esc_html($page->post_content) . '</div>';
                } else {
                    echo "<p>ページが見つかりません</p>";
                }
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
