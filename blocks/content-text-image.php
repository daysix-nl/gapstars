<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="<?php echo the_field('inner-margin'); ?> <?php echo the_field('background-color'); ?> <?php echo the_field('inner-padding'); ?>">
        <?php if(get_field('title')): ?>
            <div class="container text-center">
                <h2 class="text-37 leading-45 md:text-65 md:leading-65 pb-6 font-medium <?php echo the_field('text-color') ?>"><?php echo the_field('title'); ?></h2>
            </div>
        <?php endif; ?>

        <div class="container grid grid-cols-2 gap-3 md:gap-6 items-center">
            <div class="col-span-2 sm:col-span-1">
                <img class="rounded-3xl w-full h-auto object-fill" src="<?php echo the_field('image_block_1') ?>" alt="">
            </div>
            <div class="col-span-2 sm:col-span-1 text-center sm:text-start">
                <?php if (get_field('title_&_icon_block_1') == 'title'): ?>
                    <h3 class="<?php echo the_field('text-color') ?> text-32 leading-40 md:text-40 md:leading-50 pb-3 font-medium"><?php echo the_field('title_block_1') ?></h3>
                <?php elseif (get_field('title_&_icon_block_1') == 'icon'): ?>
                    <img class="rounded-3xl max-w-[190px] h-auto pb-4 hidden sm:block" src="<?php echo the_field('icon_block_1') ?>" alt="">
                <?php endif; ?>
                <p class="<?php echo the_field('text-color') ?> text-16 leading-26"><?php echo the_field('text_block_1') ?></p>
            </div>
        </div>
        <div class="container grid grid-cols-2 pt-6 gap-3 md:gap-6 items-center">
            <div class="col-span-2 sm:col-span-1 text-center sm:text-end">
                <?php if (get_field('title_&_icon_block_2') == 'title'): ?>
                    <h3 class="<?php echo the_field('text-color') ?> text-32 leading-40 md:text-40 md:leading-50 pb-3 font-medium"><?php echo the_field('title_block_2') ?></h3>
                <?php elseif (get_field('title_&_icon_block_2') == 'icon'): ?>
                    <img class="rounded-3xl max-w-[190px] h-auto pb-4 hidden sm:block" src="<?php echo the_field('icon_block_2') ?>" alt="">
                <?php endif; ?>
                <p class="<?php echo the_field('text-color') ?> text-16 leading-26"><?php echo the_field('text_block_2') ?></p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <img class="rounded-3xl w-full h-auto object-fill" src="<?php echo the_field('image_block_2') ?>" alt="">
            </div>
        </div>
    </section>
<?php endif; ?>