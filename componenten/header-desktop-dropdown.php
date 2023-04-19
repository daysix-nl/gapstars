
<!-- Dropdown About -->
<div class="dropdown-about drophidden">
    <div class="bordermenu border-t-2 border-lichtgrijs"></div>
    <nav class="container pt-4 pb-6 flex">
        <div class="content w-5/12 border-r-2 pl-5 border-lichtgrijs">
            <?php if( have_rows('about_us_repeater', 'option') ): ?>
                <?php while( have_rows('about_us_repeater', 'option') ): the_row(); ?>
                    <a href="<?php the_sub_field('url', 'option'); ?>">
                        <p class="text-28 leading-38 text-wit font-light font-dmsans"><?php the_sub_field('name', 'option'); ?></p>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="content w-8/12 text-wit pl-5 flex gap-3 pb-3">
            <?php if( have_rows('hubs_repeater', 'option') ): ?>
                <?php while( have_rows('hubs_repeater', 'option') ): the_row(); ?>
                    <div class="blok1">
                        <a class="h-[175px] w-[160px] rounded-3xl relative overflow-hidden block scale-img" href="<?php the_sub_field('url', 'option'); ?>">
                            <img class="w-full object-cover h-[175px]  ease-in-out duration-500" src="<?php the_sub_field('image', 'option'); ?>" alt="">
                            <div class="inner-hub"><p class="text-20 leading-19 text-wit font-normal font-dmsans"><?php the_sub_field('title', 'option'); ?></p></div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </nav>
</div>
<!-- Dropdown Insights -->
<div class="dropdown-insights drophidden">
    <div class="bordermenu border-t-2 border-lichtgrijs"></div>
    <nav class="container pt-4 pb-6 flex">
        <div class="content w-5/12 border-r-2 pl-5 border-lichtgrijs">
            <?php if( have_rows('stories_repeater', 'option') ): ?>
                <?php while( have_rows('stories_repeater', 'option') ): the_row(); ?>
                    <a href="<?php the_sub_field('url', 'option'); ?>">
                        <p class="text-28 leading-38 text-wit font-light font-dmsans"><?php the_sub_field('name', 'option'); ?></p>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="content w-8/12 text-wit pl-5 flex gap-3 pb-3">
            <?php if( have_rows('hubs_repeater', 'option') ): ?>
                <?php while( have_rows('hubs_repeater', 'option') ): the_row(); ?>
                    <div class="blok1">
                        <a class="h-[175px] w-[160px] rounded-3xl relative overflow-hidden block scale-img" href="<?php the_sub_field('url', 'option'); ?>">
                            <img class="w-full object-cover h-[175px]  ease-in-out duration-500" src="<?php the_sub_field('image', 'option'); ?>" alt="">
                            <div class="inner-hub"><p class="text-20 leading-19 text-wit font-normal font-dmsans"><?php the_sub_field('title', 'option'); ?></p></div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </nav>
</div>
<!-- Overlays -->
<div class="overlay-service drophidden"></div>
<div class="overlay-about drophidden"></div>
<div class="overlay-insights drophidden"></div>