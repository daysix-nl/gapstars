<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <style>
    .accordion {
    background-color: <?php echo get_field('background-color_accordion'); ?>;
    color: <?php echo get_field('button-text-color_default'); ?>;
    }

    .accordion.active {
    background-color: <?php echo get_field('background-color_active'); ?>;
    color: <?php echo get_field('button-text-color_active'); ?>;
    }

    .panel {
    background-color: <?php echo get_field('background-color_active'); ?>;
    color: <?php echo get_field('text-color_active_inner'); ?>;
    }

    </style>

    <?php if(get_field('navigation_accordion')): ?>
        <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('backgroud-color_navigation'); ?> <?php echo get_field('inner_padding_navigation'); ?>">
            <div class="container">
                <h3 class="text-22 md:text-28 leading-30 md:leading-38 md:pr-6 mb-6 <?php echo get_field('text-color_navigation'); ?>"><?php echo get_field('text_navigation'); ?></h3>
            </div>
            <div class="container grid md:grid-cols-3 gap-2 md:gap-3">
                <?php if( have_rows('accordion_repeater') ): ?>
                    <?php while( have_rows('accordion_repeater') ): the_row(); 
                        $title = get_sub_field('title');
                        $titlenospaces = str_replace(' ','',$title ); 
                    ?>
                        <a class="<?php echo get_field('backgroud-color_navigation_buttons'); ?> rounded-3xl h-10 col-span-1 text-28 leading-38 p-3 flex items-center <?php echo get_field('text-color_navigation_buttons'); ?>" href="#<?php echo $titlenospaces ?>"><img class="w-[44px] mr-3" src="/wp-content/themes/gapstars/img/icons-acf/<?php echo get_sub_field('icon_title'); ?>.svg" alt="<?php echo get_sub_field('icon_title'); ?>"> <?php echo get_sub_field('title'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="mt-10 mb-10 md:mb-12 md:mt-12 <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?>">
            <?php if( have_rows('accordion_repeater') ): ?>
                <?php while( have_rows('accordion_repeater') ): the_row(); 
                        $title = get_sub_field('title');
                        $titlenospaces = str_replace(' ','',$title ); 
                ?>
                <section class="mt-10 mb-10 md:mb-12 md:mt-12 first:mt-0 last:mb-0">
                    <div class="container" id="<?php echo $titlenospaces; ?>">
                        <h2 class="text-50 leading-40 md:text-65 md:leading-60 <?php echo get_field('text-color'); ?> pb-5 md:pb-6"><?php echo get_sub_field('title') ?></h2>
                    </div>
                    <?php if( have_rows('accordions_repeater_sub') ): ?>
                        <div class="container gap-2 flex flex-col accordion-div">
                        <?php while( have_rows('accordions_repeater_sub') ): the_row(); ?>
                                <button class="accordion text-20 leading-30 md:text-26 md:leading-36 font-medium p-2 px-2 md:px-4 flex items-center"><?php echo get_sub_field('title') ?></button>
                                <div class="panel px-2 md:px-4 mt-[-20px]">
                                    <p class="pb-3 pt-1 text-16 leading-26 pr-4"><?php echo get_sub_field('text') ?></p>
                                </div>
                        <?php endwhile; ?>
                        </div>
                        </section>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
    </section>
<?php endif; ?>

