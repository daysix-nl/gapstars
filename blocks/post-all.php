<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="bg-[#F4F4F4]">
        <div class="container pb-6 pt-10 md:pt-12 ">
            <?php if(get_field('title')): ?>
                    <h1 class="text-65 leading-65 md:text-75 md:leading-85 text-black"><?php echo get_field('title') ?></h1>
            <?php endif; ?>
        </div>
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'post',
                'category_name'       => get_field('post_catergory'),
                'posts_per_page' => 2,
                'paged' => 1,
            )
            );
        ?>
        <?php if ($loop->have_posts()): ?>
            <div class="bg-[#F4F4F4]">
                <div class="container pb-10 md:pb-12 grid gap-x-2 sm:gap-x-3 gap-y-6 sm:grid-cols-2">
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>         
                        <a class="sm:col-span-1" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <img class="aspect-video  w-full object-cover rounded-3xl" 
                            src="<?php (has_post_thumbnail()) ? the_post_thumbnail_URL() : echo get_field('default_image'); ?>" 
                            alt="<?php the_title( ); ?>">
                            <h3 class="md:text-26 md:leading-36 leading-32 text-22 my-2 md:my-4 md:pr-2"><?php the_title( ); ?></h3>
                            <button class="text-oranje button-read-more text-16 leading-16" href="<?php the_permalink(); ?>">Read more</button>
                        </a>
                    <?php endwhile; wp_reset_query(); ?>    
                </div>
            </div>
        <?php endif; ?>  


        <?php
            $post = new WP_Query( array(
                'post_type' => 'post',
                'category_name'       => get_field('post_catergory'),
                'posts_per_page' => 100,
                'paged' => 1,
                'offset' => 2,
            )
            );
        ?>
        <?php if ($post->have_posts()): ?>
            <div class="bg-white">
                <div class="container py-10 md:py-12 grid gap-x-2 sm:gap-x-3 gap-y-6 sm:grid-cols-6">
                    <?php while ( $post->have_posts() ) : $post->the_post(); ?>         
                        <a class="sm:col-span-3 md:col-span-2" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <img class="aspect-video w-full object-cover rounded-3xl"                         
                            src="<?php (has_post_thumbnail()) ? the_post_thumbnail_URL() : echo get_field('default_image'); ?>"  
                            alt="<?php the_title( ); ?>">
                            <h3 class="text-26 leading-36 my-3 md:pr-1"><?php the_title( ); ?></h3>
                            <button class="text-oranje button-read-more text-16 leading-16" href="<?php the_permalink(); ?>">Read more</button>
                        </a>
                    <?php endwhile; wp_reset_query(); ?>    
                </div>
            </div>
        <?php endif; ?>  
    </section>
<?php endif; ?>  