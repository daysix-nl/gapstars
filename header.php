<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Hind:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <script async src='https://control-cf.yourwoo.com/jq_efaca2.js'></script>
    <!-- Leadinfo tracking code -->
    <script async> (function(l,e,a,d,i,n,f,o){if(!l[i]){l.GlobalLeadinfoNamespace=l.GlobalLeadinfoNamespace||[]; l.GlobalLeadinfoNamespace.push(i);l[i]=function(){(l[i].q=l[i].q||[]).push(arguments)};l[i].t=l[i].t||n; l[i].q=l[i].q||[];o=e.createElement(a);f=e.getElementsByTagName(a)[0];o.async=1;o.src=d;f.parentNode.insertBefore(o,f);} }(window,document,"script","https://cdn.leadinfo.net/ping.js","leadinfo","LI-5F11A67EACFB4")); </script>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MX7B4J9');</script>
	<!-- End Google Tag Manager -->
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="E9FPeEwngtUcd0f-LDozUoKt4OmlTouNF3JXsK8Iu18" />
</head>

<body <?php body_class( 'class-name ' ); ?>>
<div class="body">
    <header id="header-desktop" >
        <?php include get_template_directory() . '/componenten/header-desktop.php'; ?>
        <?php include get_template_directory() . '/componenten/header-mobile.php'; ?>
    </header>

    <?php include get_template_directory() . '/componenten/header-desktop-dropdown.php'; ?>
    <?php include get_template_directory() . '/componenten/header-mobile-overlay.php'; ?>

    <?php include get_template_directory() . '/componenten/build-your-team.php'; ?>
    