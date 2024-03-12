<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
    <?php 
        $image = get_field('image'); 
        $imageLogo = get_field('image_logo'); 
    ?>
    <section class="py-10 md:py-12 bg-[#F4F4F4]">
    <div class="container grid md:grid-cols-3">
            <?php if($imageLogo): ?>
                <div class="bg-diepgrijs w-[150px] h-[150px] md:w-[250px] md:h-[250px] col-span-1 flex justify-center items-center rounded-full p-3 mb-3 md:mb-0">
                    <img class="w-full h-auto" src="<?php echo esc_url($imageLogo['url']); ?>" alt="<?php echo esc_attr($imageLogo['alt']); ?>">
                </div>
            <?php endif; ?>
            <div class="col-span-2">
                <?php if(get_field('title')): ?>
                    <h1 class="md:text-60 md:leading-65 leading-55 text-50 mb-2 md:mb-3 md:pr-2 text-black"><?php echo the_field('title'); ?></h1>
                <?php endif; ?>
                <?php if(get_field('text')): ?>
                    <p class="text-black text-22 leading-32 md:text-26 md:leading-36"><?php echo the_field('text'); ?></p>
                <?php endif; ?>
                <?php if(get_field('company_name') || get_field('company_url')): ?>
                    <p class="text-black text-22 leading-32 md:text-26 md:leading-36 mt-2 md:mt-3">Explore more about <?php echo the_field('company_name'); ?> <button class="text-oranje button-pdf"><u>here</u></button>.</p>
                <?php endif; ?>
            </div>
    </div> 
    </section>
    <?php if($image): ?>
        <section class="bg-clientimg mb-10 md:mb-12">
            <div class="container">
                <img 
                    class="w-full rounded-3xl h-[400px] md:max-h-[550px] max-h-[325px] md:h-auto object-cover" 
                    src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                >
            </div> 
        </section>
    <?php endif; ?>


    <div class="hidden fixed modal-form">
            <div class=" bg-creme rounded-3xl h-fit  w-[90vw] sm:w-[75vw] md:w-[600px] p-4 mx-auto mt-6">
                <div class="flex flex-row justify-between items-center mb-4">
                    <h3 class="text-black text-26 leading-30 ">Explore more about <?php echo the_field('company_name'); ?></h3>
                    <button class="close-pdf"><?php include('wp-content/themes/gapstars/img/icons/close-black.php'); ?></button>
                </div>
                <div class="w-full">
					<?php echo get_field('modal-form');?>
                </div>
            </div>
    </div>
<?php endif; ?>