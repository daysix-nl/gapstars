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
    <script defer> (function(l,e,a,d,i,n,f,o){if(!l[i]){l.GlobalLeadinfoNamespace=l.GlobalLeadinfoNamespace||[]; l.GlobalLeadinfoNamespace.push(i);l[i]=function(){(l[i].q=l[i].q||[]).push(arguments)};l[i].t=l[i].t||n; l[i].q=l[i].q||[];o=e.createElement(a);f=e.getElementsByTagName(a)[0];o.async=1;o.src=d;f.parentNode.insertBefore(o,f);} }(window,document,"script","https://cdn.leadinfo.net/ping.js","leadinfo","LI-5F11A67EACFB4")); </script>
	<!-- Google Tag Manager -->
		<script defer>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
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
  
    <header id="header-desktop" >
        <!-- Navbar desktop -->
        <div id="navbar-desktop" class="nav hidden lg:flex text-wit px-4 py-3 justify-between items-center bg-transparent duration-300">
            <div class="logo z-50"><a href="/"><?php include('wp-content/themes/gapstars/img/icons/logo.php'); ?></a>
            </div>
            <nav class="menu items-center gap-4 flex z-50">
                <?php if(get_field('name_dedicated_teams', 'option')): ?>
                    <a href="<?php the_field('url_dedicated_teams', 'option'); ?>"
                        class="text-18 font-dmsans font-light nodrop-service">
                        <?php the_field('name_dedicated_teams', 'option'); ?>
                    </a>
                <?php endif; ?>
                <button 
                    class="text-18 font-dmsans font-light show-modal-about drophidden relative">
                    <?php the_field('name_about_us', 'option'); ?>
                </button>
                <button
                    class="text-18 font-dmsans font-light show-modal-insights drophidden relative">
                    <?php the_field('name_stories', 'option'); ?>
                </button>
                <?php if(get_field('name_events', 'option')): ?>
                    <a href="<?php the_field('url_name', 'option'); ?>"
                        class="text-18 font-dmsans font-light nodrop-service">
                        <?php the_field('name_events', 'option'); ?>
                    </a>
                <?php endif; ?>
                <?php if(get_field('name_careers', 'option')): ?>
                    <a href="<?php the_field('url_careers', 'option'); ?>"
                        class="text-18 font-dmsans font-light nodrop-service">
                        <?php the_field('name_careers', 'option'); ?>
                    </a>
                <?php endif; ?>
                <?php if(get_field('name_contact', 'option')): ?>
                    <a href="<?php the_field('url_contact', 'option'); ?>"                         
                        class="contact p-button ml-6 border-2 border-wit rounded-full text-16 font-dmsans  font-light hover:bg-oranje hover:border-oranje transition ease-in duration-300 hover:ease-out">
                        <?php the_field('name_contact', 'option'); ?>
                    </a>
                <?php endif; ?>
            </nav>
        </div>
        <div class="border-header hidden lg:block"></div>
                <div class="flex lg:hidden p-2  w-full h-full bg-[#202020] relative hdr">
            <a href="/"><?php include('wp-content/themes/gapstars/img/icons/logo.php'); ?></a>
        </div>


    </header>
    <div id="portugalchange"></div>

    <?php include get_template_directory() . '/componenten/header-desktop-dropdown.php'; ?>
    <?php include get_template_directory() . '/componenten/header-mobile-overlay.php'; ?>

    <div class="hidden fixed modal-form-header">
    <div class=" bg-creme rounded-3xl h-fit w-[90vw] sm:w-[75vw] md:w-[600px] p-4 mx-auto mt-6 md:mt-10">
        <div class="flex flex-row justify-between items-center mb-4">
            <h3 class="text-black text-26 leading-30 ">Plan discovery call</h3>
            <button class="close-modal"><?php include('wp-content/themes/gapstars/img/icons/close-black.php'); ?></button>
        </div>
        <div class="w-full">
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "na1",
    portalId: "6637125",
    formId: "18d6549e-f2dc-47b2-b885-f2dc3291dc17"
  });
</script>
        </div>
    </div>
</div>

   
<script>
const navv = document.querySelector("#navbar-desktop");

const switchPortugal = document.getElementById("portugalchange");

try {
  const port = switchPortugal.offsetTop;
  window.addEventListener("scroll", () => {
    if (window.scrollY >= port) {
      navv.classList.add("bg-diepgrijs");
      navv.classList.remove("bg-transparent");
    } else {
      navv.classList.remove("bg-diepgrijs");
      navv.classList.add("bg-transparent");
    }
  });
} catch (error) { }
    </script>