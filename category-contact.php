<!--Review: このファイルどこで使用していますか？？ -->
<!--Review: このファイル名はWordPressのテンプレート階層では「contactというカテゴリーのアーカイブページ」を意味します。 -->
<!-- Review: 使用していないファイルは削除しましょう！ -->
<?php get_header(); ?>

<div class="category-contact-section">
<div class="wrapper">

        <div class="sec-title sec-center">
        <?php $page =get_page_by_path('contact'); ?>
        <h2 class="sec-title-heading"><?php echo $page->post_title;?></h2>
        <div class="sec-title-subHeading"><?php echo $page->post_content;?></div>
        </div>

    <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="7eebcc3" title="お問い合わせ"]'); ?>
    </div>

</div>
</div>

<?php get_footer(); ?>