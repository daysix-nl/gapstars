<!-- Navbar desktop -->
<div id="navbar-desktop" class="nav hidden lg:flex text-wit px-4 py-3 justify-between items-center ">
    <div class="logo z-50"><a href="/"><?php include('wp-content/themes/gapstars/img/icons/logo.php'); ?></a>
    </div>
    <nav class="menu items-center gap-4 flex z-50">
        <?php if(get_field('name_dedicated_teams', 'option')): ?>
            <a href="<?php echo the_field('url_dedicated_teams', 'option'); ?>"
                class="text-18 font-dmsans font-light nodrop-service">
                <?php echo the_field('name_dedicated_teams', 'option'); ?>
            </a>
        <?php endif; ?>
        <button 
            class="text-18 font-dmsans font-light show-modal-about drophidden relative">
            <?php echo the_field('name_about_us', 'option'); ?>
        </button>
        <button
            class="text-18 font-dmsans font-light show-modal-insights drophidden relative">
            <?php echo the_field('name_stories', 'option'); ?>
        </button>
        <?php if(get_field('name_events', 'option')): ?>
            <a href="<?php echo the_field('url_name', 'option'); ?>"
                class="text-18 font-dmsans font-light nodrop-service">
                <?php echo the_field('name_events', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_careers', 'option')): ?>
            <a href="<?php echo the_field('url_careers', 'option'); ?>"
                class="text-18 font-dmsans font-light nodrop-service">
                <?php echo the_field('name_careers', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_contact', 'option')): ?>
            <a href="<?php echo the_field('url_contact', 'option'); ?>"                         
                class="contact p-button ml-6 border-2 border-wit rounded-full text-16 font-dmsans  font-light hover:bg-oranje hover:border-oranje transition ease-in duration-300 hover:ease-out">
                <?php echo the_field('name_contact', 'option'); ?>
            </a>
        <?php endif; ?>
    </nav>
</div>
<div class="border-header hidden lg:block"></div>