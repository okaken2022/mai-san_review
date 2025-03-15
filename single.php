<?php get_header(); ?>

<div class="works-details-section">
<div class="wrapper">
     
    <?php $page = get_page_by_path('works'); ?>
    <div class="sec-title sec-center">
        <h2 class="sec-title-heading "><?php echo $page->post_title; ?> </h2>
        <div class="sec-title-subHeading "><?php echo $page->post_content; ?></div>
    </div>
    
     <div class="works-details-contents">
            <div class="works-details-list">
            <div class="works-details-image">
    <?php
    $pic = get_field('pic');
    if ($pic):
        // srcsetとsizesを含めた完全なレスポンシブ画像を出力
        echo wp_get_attachment_image($pic['id'], 'full', false, [
            'class' => 'works-image',
            'loading' => 'lazy',
            'sizes' => '(max-width: 768px) 100vw, (max-width: 1200px) 80vw, 1200px',
        ]);
    endif;
    ?>
            </div>

                <div class="details-text-list">
                <p class="works-details-title "><?php the_title(); ?>サイト</p>
                <p class="works-details-url details-text"> <span>URL:</span><a href="<?php the_field(
                    'url',
                ); ?>" alt="サイト"  target="_blank"><?php the_field('url'); ?></a></p>
                <p class="works-details-language details-text"><span>使用言語: </span><?php the_field(
                    'language',
                ); ?></p>
                <p class="works-details-period details-text"><span>制作期間: </span><?php the_field(
                    'period',
                ); ?></p>
                <p class="works-details-concept details-text"><span>コンセプト:</span> <?php the_field(
                    'concept',
                ); ?></p>
                
                </div>
            </div>

           
            <a href="<?php echo esc_url(
                home_url('/category/works/'),
            ); ?>"  class="btn">WorksList</a>
            <a href="<?php echo esc_url(home_url('/')); ?>"  class="btn">Top</a>
            

</div>

</div>

<?php get_footer(); ?>
