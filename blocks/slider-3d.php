<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?> relative">
        <?php if(get_field('title')): ?>
            <div class="container">
                <h2 class="<?php the_field('text-color') ?> text-40 leading-40 md:text-65 md:leading-70 text-center font-medium pb-6">
                    <?php the_field('title'); ?>
                </h2>
            </div>
        <?php endif; ?>
        <?php if( have_rows('slider_3d') ): ?>
            <div class="relative">
                <div class="container">
                    <div class="swiper mySwiper-3D">
                        <div class="swiper-wrapper">
            <?php while( have_rows('slider_3d') ): the_row(); ?>
                            <div class="swiper-slide">
                                <img class="rounded-3xl"  src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('image_alt'); ?>">
                            </div>
            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next-3D">
                    <?php include get_template_directory() . '/img/icons/arrow-next.php'; ?>
                </div>
                <div class="swiper-button-prev-3D">
                    <?php include get_template_directory() . '/img/icons/arrow-prev.php'; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_field('button')): ?>
            <div class="container pt-6">
                <div class="text-center flex justify-center">
                    <?php include get_template_directory() . '/componenten/button.php'; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>