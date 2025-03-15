<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ポートフォリオサイト">
    <title><?php echo bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
    <div class="header-inner wrapper">
      <div class="site-title"><a href="<?php echo esc_url(
          home_url(),
      ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/logo3.svg" alt="myportfolio"></a></div>
      <nav class="navi scroll-nav">
        <ul class="navi-menu">
        <li><a href="/#works" class="menu-title">Works</a></li>
        <li><a href="/#service" class="menu-title">Service</a></li>
        <li><a href="/#about" class="menu-title">About</a></li>
        <li><a href="/#contact" class="menu-title menu-title-contact">Contact</a></li>
        </ul>
      </nav>
      </div>

      <div class="humberger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
"