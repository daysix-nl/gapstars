<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <section class="bg-[#F4F4F4]  py-10 md:py-12">
        <?php if(get_field('title')): ?>
            <div class="container mb-5 md:mb-6">
                <h1 class="text-65 leading-65 md:text-75 md:leading-85 text-black"><?php the_field('title'); ?></h1>
            </div>
        <?php endif; ?>

        <?php
            $post = new WP_Query( array(
                    'post_type' => 'casesclient',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                )
            );
        ?>
        <?php if ($post->have_posts()): ?>
            <div class="container grid gap-2 md:gap-3 md:grid-cols-3">
                    <?php while ( $post->have_posts() ) : $post->the_post(); $post_id = get_the_ID(); ?>         
                    <a class="col-span-1 bg-white rounded-3xl h-auto flex flex-col" href="<?php the_permalink(); ?>">
                        <img class=" h-[200px] w-full object-cover overflow-hidden rounded-t-3xl" src="<?php the_field('image_post_client', $post_id); ?>" alt="">
                        <div class="bg-black w-[120px] h-[120px] flex justify-center items-center rounded-full p-1.5 mx-auto mt-[-75px]">
                            <img src="<?php the_field('logo_post_client', $post_id); ?>" alt="">
                        </div>
                        <div class="pb-4 pt-2  mx-3">
                            <h3 class="lg:text-26 lg:leading-36 leading-32 text-22 mb-2 md:mb-3 lg:pr-2 text-black"><?php the_title() ?></h3>
                            <p class="text-black text-16 leading-26"><?php the_field('text_post_client', $post_id); ?></p>
                            <button class="text-oranje button-read-more text-16 leading-16 mt-3" href="<?php the_permalink(); ?>">Read more</button>
                        </div>
                    </a>
                    <?php endwhile; wp_reset_query(); ?>    
            </div>
        <?php endif; ?>  
    </section>
<?php endif; ?>