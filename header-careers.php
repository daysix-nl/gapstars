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

<body <?php body_class( 'class-name' ); ?>>
<div class="body">
    <style>
        .mobile-overlay.bg-grijs.open, .mobile-overlay__main.bg-grijs, .mobile-overlay__second, header .w-full.h-full.relative {
            background-color: #220059 !important;
            --tw-bg-opacity: 0!important;
        }
        
        header .bg-[#202020] {
            background-color: #220059 !important;
            --tw-bg-opacity: 0!important;
        }

         .dropdown-service, .dropdown-about,  .dropdown-insights {
            background-color: #220059 !important;
            --tw-bg-opacity: 0!important;
        }


        .nav.navbackgroundinsights+.border-header, .nav.navbackgroundabout+.border-header {
            border-top: 2px solid #fff !important;
        }

        .nav.navbackgroundinsights, .nav.navbackgroundabout {
            background-color: #220059 !important;
        }

        .border-lichtgrijs {
            --tw-border-opacity: 0!important;
            border-color: #fff !important;
        }

        #navbar-desktop {
            background-color: transparent;
        }

        .bg-[#202020].relative {
            background-color: #220059 !important;
            --tw-bg-opacity: 0!important;
        }
    </style>
    <header id="header-desktop" class="hidden" >
        <?php include get_template_directory() . '/componenten/header-desktop.php'; ?>
        <?php include get_template_directory() . '/componenten/header-mobile.php'; ?>
    </header>

    <?php include get_template_directory() . '/componenten/header-desktop-dropdown.php'; ?>
    <?php include get_template_directory() . '/componenten/header-mobile-overlay.php'; ?>

    <?php include get_template_directory() . '/componenten/build-your-team.php'; ?>
    

    <script>


        /**********************/
        /**** Header - careers ***/
        /**********************/
    const header = document.querySelector("#navbar-desktop");
    const headerAll = document.querySelector("#header-desktop");
    const headerBorder = document.querySelector(".border-header");
    const headerBorderAbout = document.querySelector(".nav.navbackgroundabout");
    const headerBorderInsights = document.querySelector(
    ".nav.navbackgroundinsights"
    );
    window.addEventListener('load', (event) => {    
        headerAll.classList.remove("hidden");
    });

    function scroll() {
    headerBorderAbout == false
        ? (headerBorder.style.borderTop = "2px solid #fff")
        : (headerBorder.style.borderTop = "none");

    document.querySelector("html").scrollTop === 0
        ? (header.style.backgroundColor = "transparent")
        : (header.style.backgroundColor = "#220059" , headerBorder.style.borderTop = "2px solid #fff");
    }

    window.onscroll = scroll;
    window.onload = scroll;
    </script>