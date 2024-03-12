<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <div id="switch-to-creme"></div>
    <!--  Who we are -->
    <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?> card-whoweare">
        <div class="container text-center">
            <?php if(get_field('title')): ?>
                <h2 class="text-50 leading-50 md:text-65 md:leading-65 font-normal text-center <?php echo get_field('text-color'); ?>"><?php echo get_field('title');?></h2>
            <?php endif; ?>
            <div class="md:mt-6 md:mb-6 grid  md:grid-cols-3">
                <?php
                    if( have_rows('card_repeater') ):
                        while( have_rows('card_repeater') ) : the_row(); ?>
                            <div class="md:col-span-1 text-center md:border-r-2 md:border-<?php echo get_field('border-color'); ?> md:last-of-type:border-r-0 px-4 pt-6 md:py-0 whoweare-card">
                                <img class="mx-auto" src="/wp-content/themes/gapstars/img/icons-acf/<?php echo the_sub_field('card_repeater_icon');?>.svg" alt="">
                                <h3 class="text-26 leading-28 mt-4 mb-3 md:my-4 <?php echo get_field('text-color_inner'); ?>"><?php echo the_sub_field('card_repeater_title');?></h3>
                                <p class="text-16 leading-24 md:text-16 md:leading-26 w-full sm:w-4/5 md:w-full mx-auto <?php echo get_field('text-color_inner'); ?>"><?php echo the_sub_field('card_repeater_text');?></p>
                                <div class="w-[200px] h-[2px] bg-<?php echo get_field('border-color'); ?> mx-auto md:hidden md:last-of-type:hidden mt-6 line"></div>
                            </div>
                        <?php
                        endwhile;
                        else :
                        endif;
                ?>
            </div>
            <div class="flex justify-center">
                <?php include get_template_directory() . '/componenten/button.php'; ?>
            </div>
        </div>
    </section>
<?php endif; ?>