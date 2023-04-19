<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <style>
        .swiper-pagination-bar {
            bottom: 0;
            top: unset !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            background-color: <?php the_field('default_scrollbar'); ?> !important;
        }

        .swiper-pagination-bar span {
            background-color:  <?php the_field('active_scrollbar'); ?> !important;
        }
    </style>

    <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
        <div class="container mb-6 ">
            <?php if(get_field('title')): ?>
                <h2 class="<?php the_field('text-color') ?> text-50 leading-50 lg:text-65 lg:leading-65 font-medium  mx-auto <?php the_field('align_title'); ?> mb-5"><?php the_field('title');?></h2>
            <?php endif; ?>
            <?php if(get_field('subtitle')): ?>
                <h3 class="text-22 lg:text-26 leading-30 lg:leading-36 <?php the_field('text-color'); ?> <?php the_field('align_title'); ?>"><?php the_field('subtitle'); ?></h3>
            <?php endif; ?>
        </div>
        <div 
        <?php if(get_field('swiper_mobile')): ?>
            class="container px-[0px] lg:px-[30px]"
        <?php else: ?>
            class="container"
        <?php endif; ?>
        >

    <?php
        if( have_rows('card_repeater') ): ?>
            <div
            <?php if(get_field('swiper_mobile')): ?>
                <?php  if(get_field('column') == 'grid-cols-1'): ?>
                    class="swiper mySwiperScroll"
                <?php elseif (get_field('column') == 'grid-cols-2'): ?>
                    class="swiper mySwiperScroll  pb-5 lg:pb-0 px-3 lg:px-0"
                <?php elseif (get_field('column') == 'grid-cols-3'): ?>
                    class="swiper mySwiperScroll pb-5 lg:pb-0 px-3 lg:px-0"
                <?php endif; ?>
            <?php else: ?>
                class="swiper mySwiperScroll"
            <?php endif; ?>
            >
                <div 
                <?php if(get_field('swiper_mobile')): ?>
                    class="swiper-wrapper lg:grid lg:<?php the_field('column') ?>  lg:gap-3 lg:mx-0 lg:transform-none"
                <?php else: ?>
                    class="swiper-wrapper grid <?php the_field('column') ?> gap-2 lg:gap-3  lg:transform-none"
                <?php endif; ?>
                > 
            <?php while( have_rows('card_repeater') ) : the_row(); ?>
                <div 
                <?php if(get_field('swiper_mobile')): ?>
                    class="swiper-slide h-auto lg:col-span-1 w-[320px] lg:w-full"
                <?php else: ?>
                    class="swiper-slide h-auto col-span-full lg:col-span-1 w-full"
                <?php endif; ?>
                >

                    <?php  if(get_field('column') == 'grid-cols-1'): ?>
                <div class="<?php the_field('background-color_inner'); ?> rounded-3xl w-full h-full px-4 py-2 ">
                        <div class="flex flex-row items-center">
                            <img class="w-[52px] mr-3" src="/wp-content/themes/gapstars/img/icons-acf/<?php the_sub_field('card_repeater_icon');?>.svg" alt="">
                            <h3 class="text-22 lg:text-26 leading-30 lg:leading-36 <?php the_field('text-color_inner'); ?> "><?php the_sub_field('card_repeater_title');?></h3>
                        </div>
                    <?php elseif (get_field('column') == 'grid-cols-2'): ?>
                <div class="<?php the_field('background-color_inner'); ?> rounded-3xl w-full h-full px-4 py-6 ">
                        <?php if(get_sub_field('image_icon') == 'icon' ): ?>
                                <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center">
                                    <img class="lg:order-1 ml-3 w-[52px]" src="/wp-content/themes/gapstars/img/icons-acf/<?php the_sub_field('card_repeater_icon');?>.svg" alt="">
                            <?php elseif(get_sub_field('image_icon') == 'image' ):  ?>
                                <div class="flex flex-col lg:flex-row lg:items-center">
                                    <img class="w-[100px] h-[100px] object-cover mr-2 rounded-full" src="<?php the_sub_field('image'); ?>" alt="">
                            <?php endif;  ?>
                            <h3 class="lg:order-0 text-22 lg:text-26 leading-30 lg:leading-36 <?php the_field('text-color_inner'); ?> mt-3 lg:mt-0"><?php the_sub_field('card_repeater_title');?></h3>
                        </div>
                    <?php elseif (get_field('column') == 'grid-cols-3'): ?>
                <div class="<?php the_field('background-color_inner'); ?> rounded-3xl w-full h-full px-4 py-6 ">
                        <div class="flex flex-col">
                            <img class="w-[52px]" src="/wp-content/themes/gapstars/img/icons-acf/<?php the_sub_field('card_repeater_icon');?>.svg" alt="">
                            <h3 class="text-22 lg:text-26 leading-30 lg:leading-36 <?php the_field('text-color_inner'); ?> mt-3"><?php the_sub_field('card_repeater_title');?></h3>
                        </div>
                    <?php endif; ?>
                        <?php if(get_sub_field('text_input') == 'paragraph'): ?>
                            <?php if(get_sub_field('card_repeater_text')): ?>
                                <p class="text-16 leading-24 lg:text-16 lg:leading-26 <?php the_field('text-color_inner'); ?> mt-3"><?php the_sub_field('card_repeater_text');?></p>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if( have_rows('list') ): ?>
                                <ul class="<?php the_field('text-color_inner'); ?> flex flex-col gap-1 mt-3">
                                    <?php while( have_rows('list') ): the_row(); ?>
                                        <li class="<?php the_field('text-color_inner'); ?> text-16 leading-26 "><?php the_sub_field('list_item') ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
                </div>
                <div class="swiper-pagination-bar lg:hidden w-[80vw]"></div>
            </div>


    
    <?php
            endif;
    ?>

        </div>

        <div class="container pt-6">
            <div class="text-center flex justify-center">
                <?php include get_template_directory() . '/componenten/button.php'; ?>
            </div>
        </div>

    </section>
<?php endif; ?>