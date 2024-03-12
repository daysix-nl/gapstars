<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?> relative">
        <div class="container">
            <div class="<?php echo get_field('background-color_inner'); ?> rounded-3xl p-3 sm:p-6">
                <?php if(get_field('title')): ?>
                    <h2 class="<?php echo get_field('text-color') ?>  text-40 leading-40 md:text-65 md:leading-70 text-center font-medium pb-6">
                        <?php echo get_field('title'); ?>
                    </h2>
                <?php endif; ?>
                <?php if( have_rows('slider_repeater') ): ?>
                    <div class="relative swiperblock-buttons">
                        <div class="swiper mySwiperBlock pb-3">
                            <div class="swiper-wrapper">
                    <?php while( have_rows('slider_repeater') ): the_row(); ?>
                            <div class="swiper-slide flex gap-3 flex-col sm:flex-row ">
                                <div class="w-full sm:w-1/2">
                                    <img class="max-h-[275px] mx-auto" src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('image_alt'); ?>">
                                </div>
                                <div class="w-full sm:w-1/2 text-center sm:text-start">
                                    <h3 class="text-26 leading-28 sm:text-40 sm:leading-40 pb-3 font-bold <?php echo get_field('text-color_inner'); ?>"><?php echo get_sub_field('title'); ?></h3>
                                    <p class="text-16 leading-26 <?php echo get_field('text-color_inner'); ?>"><?php echo get_sub_field('text'); ?></p>
                                </div>
                            </div>
                    <?php endwhile; ?>
                        </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-next-block">
                            <?php include get_template_directory() . '/img/icons/arrow-next.php'; ?>
                        </div>
                        <div class="swiper-button-prev-block">
                            <?php include get_template_directory() . '/img/icons/arrow-prev.php'; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>