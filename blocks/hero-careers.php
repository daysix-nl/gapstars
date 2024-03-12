<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="home-header-section relative flex justify-center <?php echo get_field('background-color'); ?>">
        <div class="container grid grid-cols-2  items-center  gap-3">
            <div class="col-span-2 md:col-span-1 pr-3">
                <h1 class="<?php echo get_field('text-color'); ?> text-40 leading-40 sm:text-70 sm:leading-70 md:text-75 md:leading-75 font-medium"><?php echo get_field('title'); ?></h1>
                <h3 class="<?php echo get_field('text-color'); ?> my-4 text-23 leading-33 md:text-28 md:leading-38 font-normal"><?php echo get_field('subtitle'); ?></h3>
                <?php include get_template_directory() . '/componenten/button.php'; ?>
            </div>
            <div class="col-span-2 md:col-span-1 absolute-header-img">
                <img class="responsive <?php if( get_field('image_floating') ) { ?> floating <?php } ?>" src="<?php echo get_field('image'); ?>" alt="<?php echo get_field('image_alt'); ?>">
            </div>
        </div>
        <button class="button-wrap-down">
            <?php include get_template_directory() . '/img/icons/arrow-down.php'; ?>
        </button>
    </section>
<?php endif; ?>
