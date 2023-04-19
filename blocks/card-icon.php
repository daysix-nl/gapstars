<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <?php if( have_rows('card_repeater') ): ?>
        <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
            <div class="container mt-[-40px]">
            <div class="flex flex-wrap flex-row gap-2 md:gap-4 <?php the_field('background-color_inner'); ?> p-3 md:p-4 rounded-3xl w-fit">
        <?php while( have_rows('card_repeater') ): the_row(); ?>
  
 
                    <img class="w-full max-w-[90px] md:max-w-[100px]" src="<?php the_sub_field('image'); ?>">


        <?php endwhile; ?>
        </div>
            </div>
        </section>
    <?php endif; ?>

<?php endif; ?>