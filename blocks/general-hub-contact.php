<section class=" <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?> <?php  echo (get_field('element_bottom')) ? "mb-[-60px]" : the_field('inner-margin'); ?> ">
    <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/2  rounded-t-3xl md:rounded-t-none  md:rounded-l-3xl overflow-hidden hidden md:block">
                <img class="w-full h-full object-cover" src="<?php echo get_field('image'); ?>" alt="">
            </div>
            <div class="w-full md:w-1/2  p-4 md:p-4 md:pt-6 <?php echo get_field('background-color_inner'); ?> rounded-3xl md:rounded-l-none  md:rounded-r-3xl flex flex-col justify-between md:pr-8">
                <p class="text-16 leading-26 <?php echo get_field('text-color_inner'); ?>"><?php echo get_field('subtext'); ?></p>
                <h3 class="text-26 leading-36  font-medium my-2 <?php echo get_field('text-color_inner'); ?>"><?php echo do_shortcode(echo get_field('title')); ?></h3>
                <div class="w-full contact-form-hub">
                    <?php echo get_field('form'); ?>
                </div>
            </div>
        </div>
</section>