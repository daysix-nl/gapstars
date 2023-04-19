<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */
    $title = get_field('title') ?: "The title is empty";
?>
    <section id="home-header" class="bg-[#202020] pb-4">
            <div class="container text-wit home-header-section grid grid-cols-3 items-center">
                <div class="col-span-3 lg:col-span-2">
                    <h1 class="text-65 leading-65 md:text-75 md:leading-75 font-medium row-center"><?php echo esc_html( $title ); ?></h1>
                    <p class="text-22 leading-30 md:text-26 md:leading-36 font-light lg:w-[80%] pr-4 mt-3"><?php the_field('text', 'option') ?></p>
                    <menu class="flex pt-4 gap-2 md:gap-3 flex-wrap">
                        <button
                            class="bg-oranje text-white text-16 leading-16 lg:text-16 lg:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out flex items-center w-fit button-modal h-[45px]"
                        >
                            <?php the_field('text_modal', 'option'); ?>
                        </button>
                        <?php include get_template_directory() . '/componenten/second_buttonOption.php'; ?>
                    </menu>
                </div>
                <div class="col-span-1 hidden lg:flex relative">
                    <img class="w-full border-animation absolute bottom-[-20px] top-2 left-40 right-[-20px] z-[1]"src="<?php the_field('image_border'); ?>" alt="">
                    <div class="p-0 z-[2]">
                        <img class="w-full rounded-3xl " src="<?php the_field('image'); ?>" alt="">
                    </div>
                </div>
            </div>
            <?php include get_template_directory() . '/componenten/slider-hero.php'; ?>
    </section>
<?php endif; ?>