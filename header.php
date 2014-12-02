<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">    
    <!-- delete if non-responsive / start -->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!-- delete if non-responsive / end -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo( name ); ?></title>
	<!-- Yandex verification -->
    <meta name='yandex-verification' content='7b64f75a1044927d' />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo( template_url ); ?>/favicon.ico">
    <!-- styles -->
    <link rel="stylesheet" href="<?php bloginfo( template_url ); ?>/vendor/bootstrap/3.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo( template_url ); ?>/css/style.css">
    <!-- fonts -->
    <link rel="stylesheet" href="<?php bloginfo( template_url ); ?>/fonts/inconsolata/inconsolata.css"> 
    <!-- Custom styles from admin panel -->    
    <style>        
        .header .navbar-brand {
            background: url(<?php the_field('asvd_logo') ?>) no-repeat transparent;
            background-size:151px;
            background-position: center;
        }
        .navbar-default {
            background-color: <?php the_field('asvd_menubg') ?>;
        }
        .nb-wrapper {
            background-color: <?php the_field('asvd_logobg') ?>;
        }
        .navbar-default .navbar-nav > li > a {
            color: <?php the_field('asvd_menutextcolor') ?>;
        }
        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
            background-color: <?php the_field('asvd_menucurrentitembg') ?>;
            color: <?php the_field('asvd_menucurrentitemtextcolor') ?>;
        }
        .header {
            background-image: url(<?php the_field('asvd_header_img') ?>);
        }
        .header_logo {
            background-color: <?php the_field('asvd_headerlogobg') ?>;
            opacity: <?php the_field('asvd_headerlogobgopacity') ?>;
        }
        .abou_us {
            background-color: <?php the_field('asvd_about_usbg') ?>;
        }
        .abou_us blockquote {
            background-color: <?php the_field('asvd_about_ustextbg') ?>;
            color: <?php the_field('asvd_about_ustextcolor') ?>;
        }        
        .section-2 {
            background-color: <?php the_field('asvd_bgcolor_block_2') ?>;
        }
        .section-2 .section-2_title {
            color: <?php the_field('asvd_title_block_2_color') ?>;
        }
        .section-2_item__text {
            background-color: <?php the_field('asvd_textbg_block_2') ?>;
        }
        .section-3 {
            background-color: <?php the_field('asvd_bgcolor_block_3') ?>;
        }
        .section-3 .section-2_title {
            color: <?php the_field('asvd_title_block_3_color') ?>;
        }
        .section-5 {
            background-color: <?php the_field('asvd_bgcolor_block_4') ?>;
        }
        .section-5 .section-2_title {
            color: <?php the_field('asvd_title_block_4_color') ?>;
        }
        .section-5_item {
            color: <?php the_field('asvd_email_phone_block_4_color') ?>;
        }
        .section-5_form {
            border-color: <?php the_field('asvd_formbordercolor_block_4') ?>;
        }
        .footer {
            background-color: <?php the_field('asvd_bgcolor_block_5') ?>;
        }
        .footer_copy, .footer_copy:hover, .footer_copy:active, .footer_copy:focus,
        .footer_develop, .footer_develop:hover, .footer_develop:active, .footer_develop:focus {
            color: <?php the_field('asvd_textcolor_block_5') ?>;
        }        
    </style>
    <!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter27290855 = new Ya.Metrika({id:27290855, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/27290855" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->    
    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <p class="browsehappy">Вы используете <strong>устаревшую</strong> версию браузера, поэтому страница может работать некорректно. Обновить браузер можно <a href="http://browsehappy.com/">по этой ссылке</a> или перейти на сайт http://browsehappy.com</p>
    <![endif]-->    
    <?php if ( is_user_logged_in() ) {echo '<style>.navbar.navbar-default.navbar-fixed-top {margin-top:32px;}</style>';} ?>	
    <?php wp_head(); ?>
</head>

<body id="page-top">