<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <?php if( have_rows('card_repeater') ): ?>
        <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?>">
            <div class="container mt-[-40px]">
            <div class="max-w-[680px] grid grid-cols-4 gap-2 md:gap-4 <?php echo get_field('background-color_inner'); ?> p-3 md:p-4 rounded-3xl w-fit">
        <?php while( have_rows('card_repeater') ): the_row(); ?>
  
 
                    <img class="w-full" src="<?php echo the_sub_field('image'); ?>">


        <?php endwhile; ?>
        </div>
            </div>
        </section>
    <?php endif; ?>

<?php endif; ?>