<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <section class="my-10 md:my-12 relative">
        <div class="container">
            <div class="gradient-orange p-3 sm:p-6 rounded-3xl">
                <div class=" text-center">
                    <?php if(get_field('title')): ?>
                        <h2 class="text-28 leading-38 md:text-65 md:leading-65 pb-3 font-medium text-white"><?php echo the_field('title'); ?></h2>
                    <?php endif; ?>
                    <?php if(get_field('subtitle')): ?>
                        <h3 class="text-20 leading-20 text-white"><?php echo the_field('subtitle'); ?></h3>
                    <?php endif; ?>
                </div>
                <?php if( have_rows('icon_repeater') ): ?>
                    <div class="flex flex-wrap justify-center pt-3 sm:pt-6 mx-[-15px]">
                    <?php while( have_rows('icon_repeater') ): the_row(); ?>
                            <div class="w-1/2 sm:w-[33%] md:w-1/5">
                                <div class="m-0.75 md:m-1.5">
                                    <div class="bg-img-icon " style="background-image: url('<?php echo the_sub_field('image'); ?>');"></div>
                                </div>
                            </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>