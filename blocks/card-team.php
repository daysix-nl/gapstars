<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <section class="<?php echo the_field('inner-margin'); ?> <?php echo the_field('background-color'); ?> <?php echo the_field('inner-padding'); ?>">

                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'ptteam',
                        'category_name'       => 'board',
                        'posts_per_page' => -1,
                        'orderby' => 'rand',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php if ($loop->have_posts()): ?>
                    <div class="container team-block list-b-none">
                        <h2 class="text-26 leading-36 <?php echo the_field('text-color') ?> border-b-2 border-grijs pb-3 mb-3">Board of Directors</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();?>         
                            <div class="member col-span-1 list-b-none h-auto aspect-square">
                                <div class="relative h-full">
                                    <div class="rounded-3xl h-full overflow-hidden block scale-img bg-grijs">
                                        <img class="w-full object-fill ease-in-out duration-500 h-full" src="<?php echo the_field('image', $post_id); ?>" alt="">
                                    </div>
                                    <div class="overlay-shadow-teams"></div>
                                    <div class="team-text">
                                        <p class="font-dmsans text-white font-normal text-16 leading-22 md:text-18 md:leading-24 text-left"><?php the_title(); ?></p>
                                        <p class="font-dmsans text-oranje font-normal text-12 leading-16 text-left text-job"><?php echo the_field('function', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>    
                        </div>
                        <?php if($loop->post_count > 10): ?>
                            <button
                                class="bg-creme text-black button-members text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit mx-auto mt-6"
                            >
                                Show more team members
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>  


                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'ptteam',
                        'category_name'       => 'advisors',
                        'posts_per_page' => -1,
                        'orderby' => 'rand',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php if ($loop->have_posts()): ?>
                    <div class="container mt-4 team-block list-b-none">
                        <h2 class="text-26 leading-36 <?php echo the_field('text-color') ?> border-b-2 border-grijs pb-3 mb-3">Advisory Board</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();?>         
                            <div class="member col-span-1 h-auto aspect-square">
                                <div class="relative h-full">
                                    <div class="rounded-3xl h-full overflow-hidden block scale-img bg-grijs">
                                        <img class="w-full object-fill ease-in-out duration-500 h-full" src="<?php echo the_field('image', $post_id); ?>" alt="">
                                    </div>
                                    <div class="overlay-shadow-teams"></div>
                                    <div class="team-text">
                                        <p class="font-dmsans text-white font-normal text-16 leading-22 md:text-18 md:leading-24 text-left"><?php the_title(); ?></p>
                                        <p class="font-dmsans text-oranje font-normal text-12 leading-16 text-left text-job"><?php echo the_field('function', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>    
                        </div>
                        <?php if($loop->post_count > 10): ?>
                            <button
                                class="bg-creme text-black button-members text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit mx-auto mt-6"
                            >
                                Show more team members
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>  


                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'ptteam',
                        'category_name'       => 'leadership',
                        'posts_per_page' => -1,
                        'orderby' => 'rand',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php if ($loop->have_posts()): ?>
                    <div class="container mt-4 team-block list-b-none">
                        <h2 class="text-26 leading-36 <?php echo the_field('text-color') ?> border-b-2 border-grijs pb-3 mb-3">Leadership Team</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();?>         
                            <div class="member col-span-1 h-auto aspect-square">
                                <div class="relative h-full">
                                    <div class="rounded-3xl h-full overflow-hidden block scale-img bg-grijs">
                                        <img class="w-full object-fill ease-in-out duration-500 h-full" src="<?php echo the_field('image', $post_id); ?>" alt="">
                                    </div>
                                    <div class="overlay-shadow-teams"></div>
                                    <div class="team-text">
                                        <p class="font-dmsans text-white font-normal text-16 leading-22 md:text-18 md:leading-24 text-left"><?php the_title(); ?></p>
                                        <p class="font-dmsans text-oranje font-normal text-12 leading-16 text-left text-job"><?php echo the_field('function', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>    
                        </div>
                        <?php if($loop->post_count > 10): ?>
                            <button
                                class="bg-creme text-black button-members text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit mx-auto mt-6"
                            >
                                Show more team members
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>  


                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'ptteam',
                        'category_name'       => 'community',
                        'posts_per_page' => -1,
                        'orderby' => 'rand',
                        'order' => 'ASC'
                    )
                    );
                ?>
                <?php if ($loop->have_posts()): ?>
                    <div class="container mt-4 team-block list-b-none">
                        <h2 class="text-26 leading-36 <?php echo the_field('text-color') ?> border-b-2 border-grijs pb-3 mb-3">Community Specialists</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();?>         
                            <div class="member col-span-1 h-auto aspect-square">
                                <div class="relative h-full">
                                    <div class="rounded-3xl h-full overflow-hidden block scale-img bg-grijs">
                                        <img class="w-full object-fill ease-in-out duration-500 h-full" src="<?php echo the_field('image', $post_id); ?>" alt="">
                                    </div>
                                    <div class="overlay-shadow-teams"></div>
                                    <div class="team-text">
                                        <p class="font-dmsans text-white font-normal text-16 leading-22 md:text-18 md:leading-24 text-left"><?php the_title(); ?></p>
                                        <p class="font-dmsans text-oranje font-normal text-12 leading-16 text-left text-job"><?php echo the_field('function', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>    
                        </div>
                        <?php if($loop->post_count > 10): ?>
                            <button
                                class="bg-creme text-black button-members text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit mx-auto mt-6"
                            >
                                Show more team members
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>  




                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'ptteam',
                        'category_name' => 'engineering_members',
                        'posts_per_page' => -1,
                        'orderby' => 'rand',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php if ($loop->have_posts()): ?>
                    <div class="container mt-4 team-block list-b-none">
                        <h2 class="text-26 leading-36 <?php echo the_field('text-color') ?> border-b-2 border-grijs pb-3 mb-3">Engineering Members</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>       
                            <div class="member col-span-1 h-auto aspect-square">
                                <div class="relative h-full">
                                    <div class="rounded-3xl h-full overflow-hidden block scale-img bg-grijs">
                                        <img class="w-full object-fill ease-in-out duration-500 h-full" src="<?php echo the_field('image', $post_id); ?>" alt="">
                                    </div>
                                    <div class="overlay-shadow-teams"></div>
                                    <div class="team-text">
                                        <p class="font-dmsans text-white font-normal text-16 leading-22 md:text-18 md:leading-24 text-left"><?php the_title(); ?></p>
                                        <p class="font-dmsans text-oranje font-normal text-12 leading-16 text-left text-job"><?php echo the_field('function', $post_id); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>    
                        </div>
                        <?php if($loop->post_count > 10): ?>
                            <button
                                class="bg-creme text-black button-members text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit mx-auto mt-6"
                            >
                                Show more team members
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>  
    </section>

<?php endif; ?>

