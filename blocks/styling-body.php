<?php 
    $backgroud= get_field('background_image_styling'); 
?>

<style>
    body, 
    .is-root-container.block-editor-block-list__layout {
        <?php if( get_field('background-image_block') ): ?> 
            background-image: url(<?php the_field('background-image_block'); ?>);
        <?php endif; ?>

        <?php if( $backgroud == 'cover' ): ?> 
            background-position: top;
            background-size: cover;
            background-repeat: repeat-y;
        <?php else: ?>
            background-position: top;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        <?php endif; ?>
        background-color: <?php the_field('background-color_body') ?>;
    }
</style> 

