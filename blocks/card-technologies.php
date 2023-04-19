<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
        <?php if(get_field('title')): ?>
            <div class="container">
                <h2 class="<?php the_field('text-color'); ?> text-40 leading-40 md:text-65 md:leading-65 text-left font-medium pb-6">
                    <?php the_field('title'); ?>
                </h2>
            </div>
        <?php endif; ?>
        <?php if(get_field('subtitle')): ?>
            <div class="container">
                <h2 class="<?php the_field('text-color'); ?> text-26 leading-36 text-left font-normal pb-6">
                    <?php the_field('subtitle'); ?>
                </h2>
            </div>
        <?php endif; ?>
        <?php if( have_rows('technologie_repeater') ): ?>
            <div class="container grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-3">
            <?php while( have_rows('technologie_repeater') ): the_row(); ?>
                <div class="col-span-1 <?php the_field('background-color_inner'); ?> w-full pb-3 rounded-3xl flex flex-col justify-center items-center text-center">
                    <img class="max-w-full w-[150px]" src="<?php the_sub_field('technologie_image'); ?>" alt="<?php the_sub_field('technologie_image_alt'); ?>">
                    <p class="text-16 leading-26 <?php the_field('text-color_inner'); ?>"><?php the_sub_field('technologie'); ?></p>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>

<?php endif; ?>