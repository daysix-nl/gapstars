<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

<style>
    .text-icon-block ul li {
        font-size: 22px;
        text-height: 30px;
        margin-bottom: 10px;
    }

    .text-icon-block ul {
        list-style: circle;
        margin: 0;
        padding: 0;
        margin-left: 20px;
    }
</style>

<?php $icon = get_field('icon'); ?>
    <section class="<?php the_field('inner-margin'); ?> <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?> text-icon-block">
        <div class="container md:grid md:grid-cols-4 gap-2">
                <?php if(get_field('title')): ?>
                    <div class="md:col-span-3 mb-5">
                        <h2 class="font-medium text-60 md:text-65 leading-55 md:leading-60 <?php the_field('text-color'); ?>"><?php the_field('title'); ?></h2>
                    </div>
                <?php endif; ?>
                <?php if(get_field('text')): ?>
                    <div class="md:col-span-3">
                        <p class="font-normal text-22 md:text-26 leading-30 md:leading-36 <?php the_field('text-color'); ?>"><?php the_field('text'); ?></p>
                    </div>
                <?php endif; ?>
                <?php if(get_field('icon')): ?>
                    <div class="md:col-span-1 px-1 hidden md:block ml-auto pr-3">
                        <img class="w-full max-w-[120px]"src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                    </div>
                <?php endif; ?>
        </div>
    </section>
<?php endif; ?>