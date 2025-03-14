<?php
/**
 * CSSやJSを読み込む
 */
function my_enqueue_styles_and_scripts() {
    // 共通CSSの読み込み
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/assets/styles/style.css',
        array(),
        null
    );

    // front-page のみ読み込む
    if (is_front_page() && !is_paged()) {
        wp_enqueue_style(
            'front-page',
            get_template_directory_uri() . '/assets/styles/front-page.css',
            array('style'),
            null
        );
    }

    // JavaScript の読み込み
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'), // jQuery に依存
        null,
        true
    );

    wp_enqueue_script(
        'scroll-script',
        get_template_directory_uri() . '/assets/js/scroll.js',
        array('jquery'),
        null,
        true
    );

    // GSAP ライブラリ（CDN）
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        array(),
        null,
        true
    );

    // 自作のアニメーション用 JS
    wp_enqueue_script(
        'custom-animation',
        get_template_directory_uri() . '/assets/js/custom-animation.js',
        array('gsap'),
        null,
        true
    );

    // Splide.js の読み込み（CDN）
    wp_enqueue_script(
        'splide-js', 
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
        array(),
        '4.1.4',
        true
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles_and_scripts', 11); // 11 にして他のスクリプトより後に実行

/**
 * jQuery の読み込みを修正（CDN + フォールバック）
 */
function load_jquery_from_cdn() {
    if (!is_admin()) {
        wp_deregister_script('jquery'); // WordPress の jQuery を削除
        wp_enqueue_script(
            'jquery',
            'https://code.jquery.com/jquery-3.6.0.min.js', // 最新バージョン推奨
            array(),
            '3.6.0',
            true
        );

        // jQuery のフォールバック（CDN で失敗した場合に WordPress の jQuery を使う）
        wp_add_inline_script('jquery', 'window.jQuery || document.write("<script src=\"' . includes_url('/js/jquery/jquery.js') . '\"><\/script>");');
    }
}
add_action('wp_enqueue_scripts', 'load_jquery_from_cdn', 10); // 10 にして確実に読み込ませる

/**
 * アイキャッチ画像を有効にする
 */
add_theme_support('post-thumbnails');
