<section class="my-10 md:my-12 <?php the_field('background-color'); ?> <?php the_field('inner-padding'); ?>">
    <?php if(get_field('title')): ?>
        <div class="container">
            <h2 class="<?php the_field('text-color'); ?> text-50 leading-50 md:text-65 md:leading-70 font-normal text-center"><?php the_field('title');?></h2>
        </div>
    <?php endif; ?>




    <?php global $post; if( have_rows('cases_repeater') ): ?>
        <div class="container grid grid-cols-2 gap-2 md:gap-3 my-6">
        <?php while( have_rows('cases_repeater') ): the_row(); ?>
            <?php
            $featured_post = get_sub_field('cases_post');
            if( $featured_post ): ?>
            <?php $post = $featured_post ?>
            <?php setup_postdata( $post ); ?> 

            <div class="w-full rounded-3xl <?php the_field('background-color_inner') ?>  grid-span-1">
                <a class="p-2 md:p-4 pb-4 pt-4  flex flex-col md:flex-row items-center" href="<?php the_permalink(); ?>">
                    <div class="rounded-full <?php the_field('background-color_circle'); ?> p-1 flex justify-center aspect-square md:mx-0 w-[85px] h-[85px] md:w-1/4 md:h-auto items-center">
                        <img class="w-full " src=" <?php the_field('image_post_client', $featured_post->ID ); ?>">  
                    </div>
                    <h3 class="<?php the_field('text-color_inner') ?> text-16 leading-24 md:text-26 md:leading-28 md:w-3/4 text-center font-medium pt-1.5 md:pt-0 md:pl-4 md:pr-0 xl:pr-4  md:text-start"><?php the_field('text_post_client', $featured_post->ID ); ?></h3>
                </a>
            </div>

            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>


    <div class="text-center flex justify-center">
        <?php include get_template_directory() . '/componenten/button.php'; ?>
    </div>
</section>

