<?php get_header(); ?>

<div class="section works-section " id="works">
    <div class="wrapper ">
            <div class="sec-title sec-right">
                <?php
                $page = get_page_by_path('works');
                if ($page) {
                    echo '<h2 class="sec-title-heading">' . esc_html($page->post_title) . '</h2>';
                    echo '<div class="sec-title-subHeading">' .
                        esc_html($page->post_content) .
                        '</div>';
                } else {
                    echo '<p>ページが見つかりません</p>';
                }
                ?>
            </div>
    </div>
</div>


<?php get_footer(); ?>
