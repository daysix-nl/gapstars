<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="mt-10 mb-[-50px] md:mb-[-60px] md:mt-10  <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
        <div class="container">
            <h1 class="text-65 leading-65 md:text-75 md:leading-85 <?php the_field('text-color'); ?>"><?php the_field('title') ?></h1>
        </div>
    </section>
<?php endif; ?>