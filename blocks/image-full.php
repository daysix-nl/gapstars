<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <?php if(get_field('color-switch')): ?>
        <div id="switch-to-diepgrijs"></div>
    <?php endif; ?>

    <?php 
        $image = get_field('image'); 
        $height = get_field( 'image_height' );
    ?>

    <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
        <div class="container image-full-container">
            <div class="relative">
                <?php if(get_field('overlay')): ?>
                    <div class=" img-overlay <?php the_field('background-color_inner'); ?> rounded-3xl z-[1] opacity-40"></div>
                <?php endif; ?>
                <img
                    <?php if( $height == 'low' ): ?>
                        class="w-full rounded-3xl h-[300px] max-h-[400px] md:h-auto object-cover <?php echo (get_field('parallax_effect')) ? "image-full" : ""; ?>" 
                    <?php else: ?>
                        class="w-full rounded-3xl h-[400px] md:max-h-[550px] max-h-[325px] md:h-auto object-cover <?php echo (get_field('parallax_effect')) ? "image-full" : ""; ?>" 
                    <?php endif; ?>
                    src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                >
                <div class="absolute top-1/2 left-1/2 text-center center-text-transform w-full md:w-4/5 p-1 md:p-6 z-[2]">
                    <?php if(get_field('title')): ?>
                        <h3 class="text-26 leading-36 md:text-40 md:leading-40 <?php the_field('text-color_inner'); ?> font-medium "><?php the_field('title');?></h3>
                    <?php endif; ?>
                    <?php if(get_field('button')): ?>
                        <div class="text-center mt-4 flex justify-center">
                            <?php include get_template_directory() . '/componenten/button.php'; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>