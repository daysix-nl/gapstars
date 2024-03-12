<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <?php 
    if(get_field('image_height') == 'h-[200px]' ): 
        $height = 'h-[350px]';
    elseif(get_field('column') == 'grid-cols-1'): 
        $height = 'h-full min-h-[275px] md:min-h-[450px]';
    endif; 
    ?>

    <?php 
        if(get_field('padding_inner_card') == 'p-0 pt-3' ): 
            $padding = 'p-0';
        else:
            $padding = 'px-4 py-5';
        endif; 
    ?>

    <style>
        a.button-gray:hover img {
            filter: brightness(0) invert(1);
            transition: 0.3s;
        }

        a.button-gray p {
            filter: brightness(0) invert(1);
            transition: 0.3s;
        }

        a.button-gray:hover  {
            transition: 0.3s;
        }
    </style>



    <section class="my-10 md:my-12 <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?>">

        <div class="container mb-6 ">
            <?php if(get_field('title')): ?>
                <h2 class="<?php echo get_field('text-color') ?>  text-50 leading-50 lg:text-65 lg:leading-65 font-medium mb-5"><?php echo get_field('title');?></h2>
            <?php endif; ?>
            <?php if(get_field('subtitle')): ?>
                <h3 class="text-22 lg:text-26 leading-30 lg:leading-36 <?php echo get_field('text-color'); ?> <?php echo get_field('align_title'); ?>"><?php echo get_field('subtitle'); ?></h3>
            <?php endif; ?>
        </div>

        <?php if( get_field('cards_navigation') ): ?>
            <?php if( have_rows('card') ): ?>
                <div class="container grid md:grid-cols-2 lg:grid-cols-4 gap-2 md:gap-3 mmt-[-50px] mb-10  md:mt-[-60px] md:mb-12">
                    <?php while( have_rows('card') ): the_row(); 
                        $title = get_sub_field('title');
                        $titlenospaces = str_replace(' ','',$title ); 
                    ?>
                        <a class="button-gray <?php echo get_field('text-color_custom_navigation'); ?> rounded-3xl h-10 col-span-1 text-16 leading-26 p-3 flex items-center <?php echo get_field('background-color_custom_navigation'); ?> hover:<?php echo get_field('text-color_custom_navigation_hover'); ?> hover:<?php echo get_field('background-color_custom_navigation_hover'); ?>" href="#<?php echo $titlenospaces ?>"><img class="w-[44px] mr-3" src="/wp-content/themes/gapstars/img/icons-acf/<?php echo the_sub_field('icon'); ?>.svg" alt="<?php echo the_sub_field('title'); ?>"> <p><?php echo the_sub_field('title'); ?></p></a>
                    <?php endwhile; ?>
                    <?php if( have_rows('custom_navigation') ): ?>
                        <?php while( have_rows('custom_navigation') ): the_row(); 
                            $title = get_sub_field('title');
                            $titlenospaces = str_replace(' ','',$title ); 
                        ?>
                        <a class="button-gray <?php echo get_field('text-color_custom_navigation'); ?> rounded-3xl h-10 col-span-1 text-16 leading-26 p-3 flex items-center <?php echo get_field('background-color_custom_navigation'); ?> hover:<?php echo get_field('text-color_custom_navigation_hover'); ?> hover:<?php echo get_field('background-color_custom_navigation_hover'); ?>" href="#<?php echo $titlenospaces ?>"><img class="w-[44px] mr-3 " src="/wp-content/themes/gapstars/img/icons-acf/<?php echo the_sub_field('icon'); ?>.svg" alt="<?php echo the_sub_field('title'); ?>"> <p><?php echo the_sub_field('title'); ?></p></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        
        <?php if( have_rows('card') ): ?>
            <div 
                <?php if(get_field('column') == 'grid-cols-3'): ?>
                    class="container w-full grid md:grid-cols-3 gap-5 md:gap-3"
                <?php elseif(get_field('column') == 'grid-cols-2'): ?> 
                    class="container w-full grid md:grid-cols-2 gap-5 md:gap-3"
                <?php elseif(get_field('column') == 'grid-cols-1'): ?> 
                    class="container w-full grid md:grid-cols-1 <?php  echo (get_field('gap')) ? "gap-5 md:gap-3" : "gap-10 md:gap-12"; ?>"
                <?php endif; ?>
            >
            <?php while( have_rows('card') ): the_row(); ?>
                <div 
                    <?php if(get_field('column') == 'grid-cols-3'): ?>
                        class="col-span-1 <?php echo get_field('background-color_inner'); ?>  rounded-3xl h-auto"
                    <?php elseif(get_field('column') == 'grid-cols-2'): ?> 
                        class="col-span-1 <?php echo get_field('background-color_inner'); ?>  rounded-3xl h-auto"
                    <?php elseif(get_field('column') == 'grid-cols-1'): ?> 
                        class="col-span-1 <?php echo get_field('background-color_inner'); ?>  rounded-3xl h-auto flex-col md:flex-row flex <?php  echo (get_field('gap')) ? "" : "gap-3 md:gap-5"; ?>"
                    <?php endif; ?>

                    <?php if(get_sub_field('anchors')): ?>
                            id="<?php  strtolower(the_sub_field('anchor_name')); ?>"
                    <?php endif; ?>
                >
                    <div
                        <?php if(get_field('column') == 'grid-cols-3'): ?>
                            class="<?php echo get_field('image_height'); ?> w-full overflow-hidden flex items-center justify-center scale-img"
                        <?php elseif(get_field('column') == 'grid-cols-2'): ?> 
                            class="<?php echo get_field('image_height'); ?> w-full overflow-hidden flex items-center justify-center scale-img "
                        <?php elseif(get_field('column') == 'grid-cols-1'): ?> 
                            class="<?php echo $height ?> w-full md:w-1/2 overflow-hidden flex items-center justify-center scale-img <?php echo the_sub_field('order'); ?> scale-100"
                        <?php endif; ?>
                    >
                        <?php if(get_field('column') == 'grid-cols-3'): ?>
                            <div class="background-image-contact <?php  echo (get_field('border-radius')) ? "rounded-3xl" : "rounded-t-xl"; ?>" style="background-image: url('<?php echo the_sub_field('image'); ?>');"></div>
                        <?php elseif(get_field('column') == 'grid-cols-2'): ?> 
                            <div class="background-image-contact <?php  echo (get_field('border-radius')) ? "rounded-3xl" : "rounded-t-xl"; ?>" style="background-image: url('<?php echo the_sub_field('image'); ?>');"></div>
                        <?php elseif(get_field('column') == 'grid-cols-1'): ?> 
                            <img class="w-full  <?php  echo (get_field('vertical-align')) ? "h-full object-cover" : ""; ?> scale-100 <?php  echo (get_field('border-radius')) ? "rounded-3xl" : ""; ?>" src="<?php echo the_sub_field('image'); ?>" alt="<?php echo the_sub_field('title'); ?>">
                        <?php endif; ?>
                    </div>
                    <div 
                        <?php if(get_field('column') == 'grid-cols-3'): ?>
                            class="flex flex-col <?php echo get_field('padding_inner_card'); ?> <?php  echo (get_field('vertical-align')) ? "justify-top" : "justify-center"; ?> gap-3"
                        <?php elseif(get_field('column') == 'grid-cols-2'): ?> 
                            class="flex flex-col <?php echo get_field('padding_inner_card'); ?> <?php echo (get_field('vertical-align')) ? "justify-top" : "justify-center"; ?> gap-3"
                        <?php elseif(get_field('column') == 'grid-cols-1'): ?> 
                            class="flex flex-col <?php echo  $padding ?>  w-full md:w-1/2 <?php echo (get_field('vertical-align')) ? "justify-top" : "justify-center"; ?> gap-3"
                        <?php endif; ?>
                    >
                        <h3 
                            <?php if(get_field('column') == 'grid-cols-3'): ?>
                                class="<?php echo get_field('text-color_inner'); ?> font-medium text-26 leading-28  "
                            <?php elseif(get_field('column') == 'grid-cols-2'): ?> 
                                class="<?php echo get_field('text-color_inner'); ?> font-medium text-26 leading-28  "
                            <?php elseif(get_field('column') == 'grid-cols-1'): ?> 
                                class="<?php echo get_field('text-color_inner'); ?> font-medium text-38 leading-38  "
                            <?php endif; ?>
                        ><?php echo do_shortcode(the_sub_field('title')); ?></h3>

                        <?php if(get_sub_field('text')): ?>
                            <p class="<?php echo get_field('text-color_inner'); ?> text-16 leading-26"><?php echo the_sub_field('text'); ?></p>
                        <?php endif; ?>
                        
                        <?php if( have_rows('list') ): ?>
                            <ul class="list-disc ml-[12px] flex flex-col gap-1">
                            <?php while( have_rows('list') ): the_row(); ?>
                                <li class="<?php echo get_field('text-color_inner'); ?>">
                                    <?php echo the_sub_field('text') ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>