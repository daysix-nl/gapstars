<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <?php
        $image = get_field('image'); 
    ?>
    <section class="<?php echo the_field('inner-margin'); ?> <?php echo the_field('background-color'); ?> <?php echo the_field('inner-padding'); ?>">
        <?php if(get_field('title')): ?>
            <div class="container <?php echo the_field('align_title'); ?>">
                <h2 class="text-40 leading-40 lg:text-65 lg:leading-65 font-medium <?php echo the_field('text-color') ?> "><?php echo the_field('title'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="grid lg:grid-cols-10  gap-2 lg:gap-5 <?php echo the_field('background-color_inner'); ?> px-3 py-4 lg:px-6 lg:my-7 rounded-3xl">

                <?php if(get_field('title_align') == 'medium'): ?>
                    <?php if(get_field('image_align') == 'left'): ?>
                        <div class="col-span-10 lg:col-span-6 order-2">
                    <?php elseif(get_field('image_align') == 'right'): ?>
                        <div class="col-span-10 lg:col-span-6">
                    <?php endif; ?> 
                <?php endif; ?>
                        <h3 
                        <?php if(get_field('title_align') == 'medium'): ?>
                            class="<?php echo (get_field('font-size')) ? "text-35 leading-40 lg:text-60 lg:leading-65 font-medium" : "text-32 leading-42 lg:text-40 lg:leading-50 font-medium"; ?> pb-2 <?php echo the_field('text-color_inner'); ?>"
                        <?php elseif(get_field('title_align') == 'large'): ?>
                            class="<?php echo (get_field('font-size')) ? "text-35 leading-40 lg:text-60 lg:leading-65 font-medium" : "text-32 leading-42 lg:text-40 lg:leading-50 font-medium"; ?> pb-2  <?php echo the_field('text-color_inner'); ?> col-span-10"
                        <?php endif; ?>
                        ><?php echo the_field('subtitle'); ?></h3>

                        <div
                            <?php if(get_field('title_align') == 'medium'): ?>
                                class=""
                            <?php elseif(get_field('title_align') == 'large'): ?>
                                <?php if(get_field('image_align') == 'left'): ?>
                                    class="col-span-10   order-2 <?php echo (get_field('border-radius')) ? "lg:col-span-7" : "lg:col-span-6"; ?>"
                                <?php elseif(get_field('image_align') == 'right'): ?>
                                    class="col-span-10  <?php echo (get_field('border-radius')) ? "lg:col-span-7" : "lg:col-span-6"; ?>"
                                <?php endif; ?> 
                            <?php endif; ?>
                        >
                            <p 
                                class="<?php echo (get_field('font-size')) ? "text-22 leading-32 lg:text-26 lg:leading-36" : "text-18 leading-24 lg:text-22 lg:leading-32"; ?> <?php echo the_field('text-color_inner'); ?>"
                            >           
                                <?php echo the_field('text'); ?>
                            </p>
                            <div class="pt-4">
                                <?php include get_template_directory() . '/componenten/button.php'; ?>
                                <?php  if (get_field('true_false_overlay')): ?>
                                    <button
                                        class="bg-oranje text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit button-pdf h-[45px]"
                                        data-target="#clientstoryform"
                                    >
                                        Read the full version
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php if(get_field('title_align') == 'medium'): ?>
                    </div>
                <?php endif; ?>

                <?php if($image): ?>
                    <img
                    <?php if(get_field('image_align') == 'left'): ?>
                        class="  object-cover   order-1 <?php echo (get_field('border-radius')) ? " rounded-full w-[200px]  h-[200px] col-span-10 lg:col-span-3" : "rounded-3xl w-full col-span-7 lg:col-span-4 order-first lg:order-none"; ?>" 
                    <?php elseif(get_field('image_align') == 'right'): ?>
                        class=" object-cover <?php echo (get_field('border-radius')) ? " rounded-full w-[200px]  h-[200px] col-span-10 lg:col-span-3" : "rounded-3xl w-full col-span-7 lg:col-span-4 order-first lg:order-none"; ?>" 
                    <?php endif; ?> 
                        src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                    >
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>