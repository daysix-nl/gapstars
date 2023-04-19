<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
        <?php if(get_field('title')): ?>
            <div class="container pb-6">
                <h2 class="<?php the_field('text-color') ?> text-50 leading-50 md:text-65 md:leading-70 font-normal"><?php the_field('title');?></h2>
            </div>
        <?php endif; ?>
        <div class="container flex-col md:flex-row hidden md:flex">
            <div class="w-full md:w-1/2">
                
                <div thumbsSlider="" class="swiper tabs-swiper <?php the_field('background-color_tabs_left'); ?> rounded-l-3xl">
                    <div class="swiper-wrapper grid-rows-4 grid justify-items-start">
                        <?php if( have_rows('slider_tabs') ): ?>
                            <?php while( have_rows('slider_tabs') ): the_row(); ?>
                                <div class="swiper-slide flex flex-row row-span-1 h-full items-center w-full px-4 py-2">
                                    <img class="w-[45px] mr-3" src="/wp-content/themes/gapstars/img/icons-acf/<?php the_sub_field('icon'); ?>.svg" alt="<?php the_sub_field('icon'); ?>">
                                    <h3 class="<?php the_field('text-color_tabs_left'); ?> text-28 leading-28 font-normal"><?php the_sub_field('title'); ?></h3>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 ">
                <div class="bg-army-green px-6 py-4  rounded-r-3xl <?php the_field('background-color_tabs_right'); ?> h-full w-full">
                    <div p-3 rounded-3xl
                        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper tabs-swiper-second p-0"
                    >       
                            <div class="swiper-wrapper ">
                                <?php if( have_rows('slider_tabs') ): ?>
                                    <?php while( have_rows('slider_tabs') ): the_row(); ?>
                                        <div class="swiper-slide flex  h-auto flex-col">
                                            <?php if(get_sub_field('title_right')): ?>
                                                <h3 class="<?php the_field('text-color_tabs_right'); ?> text-xl text-start text-26 leading-26 font-medium"><?php the_sub_field('title_right') ?></h3>
                                            <?php endif; ?>    
                                            <?php if( have_rows('bullit_points') ): ?>
                                                <ul class="pt-3">
                                                <?php while( have_rows('bullit_points') ): the_row(); ?>
                                                    <li class="<?php the_field('text-color_tabs_right'); ?> text-22 leading-32 mb-1">
                                                        <?php the_sub_field('bullet_point'); ?>
                                                    </li>
                                                <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if( have_rows('slider_tabs') ): ?>
            <div class="container gap-2 flex flex-col accordion-div md:hidden">
                <?php while( have_rows('slider_tabs') ): the_row(); ?>
                        <button class="accordion text-20 leading-30 md:text-26 md:leading-36 font-medium p-2 flex items-center">
                            <img class="w-[45px] mr-3" src="/wp-content/themes/gapstars/img/icons-acf/<?php the_sub_field('icon'); ?>.svg" alt="<?php the_sub_field('icon'); ?>">
                            <?php the_sub_field('title') ?>
                        </button>
                        <div class="panel px-2 mt-[-20px]">
                                    <?php if(get_sub_field('title_right')): ?>
                                        <h3 class="<?php the_field('text-color_tabs_right'); ?> text-xl text-start text-20 leading-28 font-medium pt-2 pb-2"><?php the_sub_field('title_right') ?></h3>
                                    <?php endif; ?>
                                    <?php if( have_rows('bullit_points') ): ?>
                                        <ul class=" pb-3 flex flex-col gap-0.75">
                                        <?php while( have_rows('bullit_points') ): the_row(); ?>
                                            <li class="<?php the_field('text-color_tabs_right'); ?> text-16 leading-26">
                                                <?php the_sub_field('bullet_point'); ?>
                                            </li>
                                        <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </section>
<?php endif; ?>








    