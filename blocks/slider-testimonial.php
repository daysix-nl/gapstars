<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?>">
        <div class="container">
        <?php if(get_field('title')): ?>
            <h2 class="<?php echo get_field('text-color') ?>  text-50 leading-50 md:text-65 md:leading-70 font-medium mt-12 mb-6 mx-auto text-center <?php echo get_field('align_title'); ?>"><?php echo get_field('title');?></h2>
        <?php endif; ?>
        <?php if(get_field('subtitle')): ?>
                <h3 class="text-22 md:text-22 leading-30 md:leading-32 mb-3 <?php echo get_field('text-color'); ?> <?php echo get_field('align_title'); ?>"><?php echo get_field('subtitle'); ?></h3>
        <?php endif; ?>
            <div class="flex ">
                <div class="swiper mySwiper">
                <?php $counter = 1; ?>
            
                    <!-- slider -->
                    <div class="swiper-wrapper">

                    <?php


                        // Check rows exists.
                        if( have_rows('testimonial_repeater') ):
                            $numrows = 0;
                            $numrows = count(get_field('testimonial_repeater'));
                            // Loop through rows.
                            while( have_rows('testimonial_repeater') ) : the_row(); ?>

                        <div class="swiper-slide md:h-[525px] flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 mix-blend-multiply h-[275px] md:h-[unset] <?php echo get_field('background-color_image'); ?> rounded-t-3xl md:rounded-tr-none  md:rounded-l-3xl relative">
                                <?php $image = get_sub_field('image'); ?>
                                <?php $photo = get_sub_field('photo'); ?>
                                <img class="w-full h-full object-cover rounded-t-3xl md:rounded-tr-none  md:rounded-l-3xl mix-blend-multiply" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <div class="md:hidden gap-1 absolute right-4 top-4 flex items-center">
                                        <div class="swiper-button-prev  flex justify-end <?php echo get_field('text-color_inner'); ?>"></div>
                                        <div class="swiper-button-next  flex justify-end <?php echo get_field('text-color_inner'); ?>"></div>
                                </div>
                                <div class="rounded-full w-[90px] h-[90px] <?php echo get_field('background-color_icon'); ?> absolute bottom-4 left-4 flex items-center justify-center md:hidden">
                                    <?php if(get_sub_field('image_icon') == 'icon' ): ?>
                                        <img class="p-1 w-full" src="/wp-content/themes/gapstars/img/icons-acf/<?php echo the_sub_field('logo');?>.svg" alt="partner-testimonial-<?php echo the_sub_field('name');?>">
                                    <?php elseif(get_sub_field('image_icon') == 'image' ):  ?>
                                        <?php $icon_image = get_sub_field('image_logo'); ?>
                                        <img class="p-2 w-full" src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>">
                                    <?php endif;  ?>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 <?php echo get_field('background-color_inner'); ?> pt-4 px-4 pb-5 md:pt-6 md:pb-4 md:px-4 rounded-b-3xl md:rounded-bl-none  md:rounded-r-3xl relative h-[350px] md:h-[unset]">
                                <div class="">
                                    <?php if(get_sub_field('image_icon') == 'icon' ): ?>
                                        <img class="mb-4 w-auto h-[60px] hidden md:block max-w-[150px]" src="/wp-content/themes/gapstars/img/icons-acf/<?php echo the_sub_field('logo');?>.svg" alt="partner-testimonial-<?php echo the_sub_field('name');?>">
                                    <?php elseif(get_sub_field('image_icon') == 'image' ):  ?>
                                        <?php $icon_image = get_sub_field('image_logo'); ?>
                                        <img class="mb-4  w-auto h-[60px] hidden md:block md:block max-w-[150px]" src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>">
                                    <?php endif;  ?>
                                    <h3 class="text-22 md:text-22 leading-32 <?php echo get_field('text-color_inner'); ?> md:pb-auto">"<?php echo the_sub_field('quote');?>"</h3>
                                    <div class="mt-4 flex gap-2 items-center">
                                        
                                        <img class="rounded-full w-[50px] h-[50px] bg-white hidden md:flex" src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>">
                                        <p class="<?php echo get_field('text-color_inner'); ?> hidden md:flex"><?php echo the_sub_field('name');?> - <?php echo the_sub_field('function');?></p>
                                    </div>
                                </div>
                                <div class="mt-4 flex justify-between items-center absolute bottom-4 left-4 right-4">
                                    <p class="<?php echo get_field('text-color_inner'); ?> md:hidden w-full"><?php echo the_sub_field('name');?> - <?php echo the_sub_field('function');?></p>
                                    <p class="text-16 leading-26 <?php echo get_field('arrow_color'); ?> md:<?php echo get_field('text-color_inner'); ?> flex justify-end md:justify-start flex-nowrap w-full"><?php echo $counter ?> - <?php echo $numrows ?></p>
                                    <div class="hidden md:flex gap-1">
                                        <div class="swiper-button-prev  flex justify-end <?php echo get_field('arrow_color'); ?>"></div>
                                        <div class="swiper-button-next  flex justify-end <?php echo get_field('arrow_color'); ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <?php $counter = ++$counter; ?>
                        </div>
                

                            <?php
                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif ?>

                    

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


