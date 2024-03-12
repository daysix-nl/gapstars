<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <style>
        .swiper-pagination-bar-gallery {
            bottom: 0;
            top: unset !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            background-color: <?php echo get_field('default_scrollbar'); ?> !important;
        }

        .swiper-pagination-bar-gallery span {
            background-color:  <?php echo get_field('active_scrollbar'); ?> !important;
        }
    </style>

    <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?> overflow-hidden">
        <div class="container mb-6 ">
            <?php if(get_field('title')): ?>
                <h2 class="<?php echo get_field('text-color') ?>  text-50 leading-50 md:text-65 md:leading-70 font-medium  mx-auto <?php echo get_field('align_title'); ?> mb-5"><?php echo get_field('title');?></h2>
            <?php endif; ?>
            <?php if(get_field('subtitle')): ?>
                <h3 class="text-22 md:text-26 leading-30 md:leading-36 <?php echo get_field('text-color'); ?> <?php echo get_field('align_title'); ?>"><?php echo get_field('subtitle'); ?></h3>
            <?php endif; ?>
        </div>
        <div class="swiper-overflow-container">
        <div class="container">
            <div class=" mySwiperGallery pb-5 relative">
                <div class="swiper-wrapper">
                    <?php if( have_rows('image_repeater') ): ?>
                        <?php while( have_rows('image_repeater') ): the_row(); 
                            $image = get_sub_field('image');

                            if($image):
                            ?>
                                <div class="swiper-slide h-auto">
                                    <img class="w-full  object-cover h-auto rounded-3xl" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination-bar-gallery w-full"></div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>