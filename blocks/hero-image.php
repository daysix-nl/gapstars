<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="h-[60vh] background-image-contact" style="background-image: url('<?php echo get_field('image'); ?>');">
        <div class="container h-full flex flex-col justify-center">
            <h1 class="text-65 leading-65 md:text-75 md:leading-85 <?php echo get_field('text-color'); ?>"><?php echo get_field('text'); ?></h1>
        </div>
    </section>
<?php endif; ?>