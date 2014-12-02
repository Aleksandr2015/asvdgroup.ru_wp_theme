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
            background-image:url(<?php the_field('asvd_logo'); ?>);
        }
    </style>
    <!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter27290855 = new Ya.Metrika({id:27290855, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/27290855" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    <!-- Yandex verification -->
    <meta name='yandex-verification' content='776cb66f6c269852' />
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