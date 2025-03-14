<?php get_header(); ?>

<main>
<div id="mainvisual">
    <div class ="mainvisual-image">
    <?php 
        $default_image_id = 540; // メディアライブラリの実際の画像IDに変更してください
        echo wp_get_attachment_image($default_image_id, 'full', false, array(
            'loading' => 'eager',
            'alt' => 'メインビジュアル'
        ));
        ?>

        
    </div>
        <h1 class="title-top">PORTFOLI<span class="highlight">O</span> SITE</h1>
        <h2 class="title-sub">CREATE WEB DESIGN</h2>
    <div class="title-text">
        <p>お客様の想いに</p>
        <p>寄り添った</p>
        <p>サイト制作をいたします</p>
    </div>
</div>

<?php get_template_part('template-parts/content', 'works'); ?>
<?php get_template_part('template-parts/content', 'service'); ?>
<?php get_template_part('template-parts/content', 'about'); ?>
<?php get_template_part('template-parts/content', 'contact'); ?>

</main>

<?php get_footer(); ?>
